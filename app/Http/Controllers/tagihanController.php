<?php

namespace App\Http\Controllers;

use App\Models\Meteran;
use App\Models\Pelanggan;
use App\Models\tagihan;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use \Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Woo\GridView\DataProviders\EloquentDataProvider;

class tagihanController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            new Middleware('permission:tagihan view', only: ['index', 'show']),
            new Middleware('permission:tagihan create', only: ['create', 'store']),
            new Middleware('permission:tagihan edit', only: ['edit', 'update']),
            new Middleware('permission:tagihan delete', only: ['destroy']),
        ];
    }

    public function index(Request $request): View
    {
        $query = tagihan::query();

        // tambahkan kolom yang mau dikecualikan di pencarian
        $except = ['created_by', 'updated_by'];

        $columns = collect($query->getModel()->getFillable())->filter(function ($item) use ($except) {
            return !in_array($item, $except);
        })->toArray();

        $selectedColumns = $request->get('col', $columns);

        if ($search = $request->get('search')) {
            $query->where(function ($query) use ($search, $selectedColumns) {
                foreach ($selectedColumns as $column) {
                    $query->orWhere($column, 'like', '%' . $search . '%');
                }
            });
        }

        $tagihan = $query->paginate(10);

        if ($request->header('HX-Request')) {
            return view('tagihan.includes.index-table', compact('tagihan'));
        }

        return view('tagihan.index', compact('tagihan', 'columns', 'selectedColumns'));
    }

    public function create(): View
    {
        $tagihan = new tagihan();
        $pelanggan = Pelanggan::with('meteran')->get();
        $meteran = Meteran::all();


        return view('tagihan.create', compact('tagihan', 'pelanggan', 'meteran'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'id_pelanggan' => 'required|integer',
            'id_meteran' => 'required|integer',
            'tahun' => 'required|integer',
            'nomor_meteran' => 'required|integer',
            'nominal' => 'nullable|numeric',
        ]);
        $validatedData['status'] = 1;
        $validatedData['awal'] = 1;
        $validatedData['akhir'] = 1;

        try {
            tagihan::create($validatedData);
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()
                ->withInput($request->all())
                ->with('error', $e->getMessage());
        }

        return redirect()->route('tagihan.index')
            ->with('success', 'Tagihan berhasil dibuat');
    }

    public function show(tagihan $tagihan): View
    {
        return view('tagihan.show', compact('tagihan'));
    }

    public function edit(tagihan $tagihan): View
    {
        $pelanggan = Pelanggan::with('meteran')->get();
        $meteran = Meteran::all();

        return view('tagihan.edit', compact('tagihan', 'pelanggan', 'meteran',));
    }

    public function update(Request $request, tagihan $tagihan): RedirectResponse
    {
        $validatedData = $request->validate([
            'id_pelanggan' => 'required|integer',
            'id_meteran' => 'required|integer',
            'tahun' => 'required|integer',
            'nomor_meteran' => 'required|integer',
            'nominal' => 'nullable|numeric',
        ]);
        $validatedData['status'] = 1;
        $validatedData['awal'] = 0;
        $validatedData['akhir'] = 0;

        try {
            $tagihan->update($validatedData);
        } catch (\Illuminate\Database\QueryException $e) {
            if ($e->getCode() == '23000') {
                return redirect()->back()
                    ->withInput($request->all())
                    ->with('error', 'Data tagihan ini sudah digunakan dan tidak dapat diperbarui.');
            }
            return redirect()->back()
                ->withInput($request->all())
                ->with('error', 'Terjadi kesalahan saat memperbarui data.');
        }

        return redirect()->route('tagihan.index')
            ->with('success', 'Tagihan berhasil diperbarui');
    }

    public function destroy(tagihan $tagihan): RedirectResponse
    {
        try {
            $tagihan->delete();
        } catch (\Illuminate\Database\QueryException $e) {
            if ($e->getCode() == '23000') {
                return redirect()->route('tagihan.index')
                    ->with('error', 'Data tagihan ini sudah digunakan dan tidak dapat dihapus.');
            }
            return redirect()->route('tagihan.index')
                ->with('error', 'Terjadi kesalahan saat menghapus data.');
        }

        return redirect()->route('tagihan.index')
            ->with('success', 'Tagihan berhasil dihapus');
    }
}
