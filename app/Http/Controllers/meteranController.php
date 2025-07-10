<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use App\Models\meteran;
use App\Models\Pelanggan;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controllers\Middleware;
use \Illuminate\Routing\Controllers\HasMiddleware;
use Woo\GridView\DataProviders\EloquentDataProvider;

class meteranController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            // new Middleware('permission:meteran view', only: ['index', 'show']),
            // new Middleware('permission:meteran create', only: ['create', 'store']),
            // new Middleware('permission:meteran edit', only: ['edit', 'update']),
            // new Middleware('permission:meteran delete', only: ['destroy']),
        ];
    }

    public function index(Request $request): View
    {
        $query = meteran::query();

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

        $meteran = $query->paginate(10);

        if ($request->header('HX-Request')) {
            return view('meteran.includes.index-table', compact('meteran'));
        }

        return view('meteran.index', compact('meteran', 'columns', 'selectedColumns'));
    }

    public function create(): View
    {
        $meteran = new meteran();
        $pelanggan = Pelanggan::all();
        $layanan = Layanan::all();

        return view('meteran.create', compact('meteran', 'pelanggan', 'layanan'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'id_pelanggan' => 'required|integer',
            'id_layanan' => 'required|integer',
            'lokasi_pemasangan' => 'required|string',
            'tanggal_pemasangan' => 'required|date',
            'chip_kartu' => 'required|string|max:255',
        ]);
        $validatedData['status'] = 1;

        try {
            meteran::create($validatedData);
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()
                ->withInput($request->all())
                ->with('error', 'Terjadi kesalahan saat membuat data.');
        }

        return redirect()->route('meteran.index')
            ->with('success', 'Meteran berhasil dibuat');
    }

    public function show(meteran $meteran): View
    {
        return view('meteran.show', compact('meteran'));
    }

    public function edit(meteran $meteran): View
    {
        return view('meteran.edit', compact('meteran'));
    }

    public function update(Request $request, meteran $meteran): RedirectResponse
    {
        $validatedData = $request->validate([
            'id_pelanggan' => 'required|integer',
            'id_layanan' => 'required|integer',
            'lokasi_pemasangan' => 'required|string',
            'tanggal_pemasangan' => 'required|date',
            'status' => 'required|boolean',
            'chip_kartu' => 'required|string|max:255',
        ]);

        try {
            $meteran->update($validatedData);
        } catch (\Illuminate\Database\QueryException $e) {
            if ($e->getCode() == '23000') {
                return redirect()->back()
                    ->withInput($request->all())
                    ->with('error', 'Data meteran ini sudah digunakan dan tidak dapat diperbarui.');
            }
            return redirect()->back()
                ->withInput($request->all())
                ->with('error', 'Terjadi kesalahan saat memperbarui data.');
        }

        return redirect()->route('meteran.index')
            ->with('success', 'Meteran berhasil diperbarui');
    }

    public function destroy(meteran $meteran): RedirectResponse
    {
        try {
            $meteran->delete();
        } catch (\Illuminate\Database\QueryException $e) {
            if ($e->getCode() == '23000') {
                return redirect()->route('meteran.index')
                    ->with('error', 'Data meteran ini sudah digunakan dan tidak dapat dihapus.');
            }
            return redirect()->route('meteran.index')
                ->with('error', 'Terjadi kesalahan saat menghapus data.');
        }

        return redirect()->route('meteran.index')
            ->with('success', 'Meteran berhasil dihapus');
    }
}
