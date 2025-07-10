<?php

namespace App\Http\Controllers;

use App\Models\Meteran;
use App\Models\pemakaian;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use \Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Woo\GridView\DataProviders\EloquentDataProvider;

class pemakaianController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            // new Middleware('permission:pemakaian view', only: ['index', 'show']),
            // new Middleware('permission:pemakaian create', only: ['create', 'store']),
            // new Middleware('permission:pemakaian edit', only: ['edit', 'update']),
            // new Middleware('permission:pemakaian delete', only: ['destroy']),
        ];
    }

    public function index(Request $request): View
    {
        $query = pemakaian::query();

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

        $pemakaian = $query->paginate(10);

        if ($request->header('HX-Request')) {
            return view('pemakaian.includes.index-table', compact('pemakaian'));
        }

        return view('pemakaian.index', compact('pemakaian', 'columns', 'selectedColumns'));
    }

    public function create(): View
    {
        $pemakaian = new pemakaian();
        $meteran = Meteran::all();

        return view('pemakaian.create', compact('pemakaian', 'meteran'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'id_meteran' => 'required|integer',
            'deskripsi' => 'required|string|max:255',
            'tahun' => 'required|string|max:4',
            'awal' => 'required|integer',
            'akhir' => 'required|integer',
        ]);

        $id_meteran = $validatedData['id_meteran'];
        $layanan = Meteran::find($id_meteran);
        $id_layanan = $layanan->id_layanan;

        $validatedData['id_layanan'] = $id_layanan;

        $pakai = $validatedData['akhir'] - $validatedData['awal'];
        $validatedData['pakai'] = $pakai;

        $validatedData['status_pembayaran'] = 0;

        try {
            pemakaian::create($validatedData);
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()
                ->withInput($request->all())
                ->with('error', 'Terjadi kesalahan saat membuat data.');
        }

        return redirect()->route('pemakaian.index')
            ->with('success', 'Pemakaian berhasil dibuat');
    }

    public function show(pemakaian $pemakaian): View
    {
        return view('pemakaian.show', compact('pemakaian'));
    }

    public function edit(pemakaian $pemakaian): View
    {
        $meteran = Meteran::all();

        return view('pemakaian.edit', compact('pemakaian', 'meteran'));
    }

    public function update(Request $request, pemakaian $pemakaian): RedirectResponse
    {
        $validatedData = $request->validate([
            'id_meteran' => 'required|integer',
            'deskripsi' => 'required|string|max:255',
            'tahun' => 'required|string|max:4',
            'awal' => 'required|integer',
            'akhir' => 'required|integer',
        ]);

        try {
            $pemakaian->update($validatedData);
        } catch (\Illuminate\Database\QueryException $e) {
            if ($e->getCode() == '23000') {
                return redirect()->back()
                    ->withInput($request->all())
                    ->with('error', 'Data pemakaian ini sudah digunakan dan tidak dapat diperbarui.');
            }
            return redirect()->back()
                ->withInput($request->all())
                ->with('error', 'Terjadi kesalahan saat memperbarui data.');
        }

        return redirect()->route('pemakaian.index')
            ->with('success', 'Pemakaian berhasil diperbarui');
    }

    public function destroy(pemakaian $pemakaian): RedirectResponse
    {
        try {
            $pemakaian->delete();
        } catch (\Illuminate\Database\QueryException $e) {
            if ($e->getCode() == '23000') {
                return redirect()->route('pemakaian.index')
                    ->with('error', 'Data pemakaian ini sudah digunakan dan tidak dapat dihapus.');
            }
            return redirect()->route('pemakaian.index')
                ->with('error', 'Terjadi kesalahan saat menghapus data.');
        }

        return redirect()->route('pemakaian.index')
            ->with('success', 'Pemakaian berhasil dihapus');
    }
}
