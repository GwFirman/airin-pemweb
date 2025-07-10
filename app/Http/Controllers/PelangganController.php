<?php

namespace App\Http\Controllers;

use App\Models\pelanggan;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use \Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Woo\GridView\DataProviders\EloquentDataProvider;

class pelangganController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            new Middleware('permission:pelanggan view', only: ['index', 'show']),
            new Middleware('permission:pelanggan create', only: ['create', 'store']),
            new Middleware('permission:pelanggan edit', only: ['edit', 'update']),
            new Middleware('permission:pelanggan delete', only: ['destroy']),
        ];
    }

    public function index(Request $request): View
    {
        $query = pelanggan::query();

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

        $pelanggan = $query->paginate(10);

        if ($request->header('HX-Request')) {
            return view('pelanggan.includes.index-table', compact('pelanggan'));
        }

        return view('pelanggan.index', compact('pelanggan', 'columns', 'selectedColumns'));
    }

    public function create(): View
    {
        $pelanggan = new pelanggan();

        return view('pelanggan.create', compact('pelanggan'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'nama_pelanggan' => 'required|string|max:255',
            'no_ktp' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
        ]);
        $validatedData['status'] = 1;

        try {
            pelanggan::create($validatedData);
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()
                ->withInput($request->all())
                ->with('error', 'Terjadi kesalahan saat membuat data.');
        }

        return redirect()->route('pelanggan.index')
            ->with('success', 'Pelanggan berhasil dibuat');
    }

    public function show(pelanggan $pelanggan): View
    {
        return view('pelanggan.show', compact('pelanggan'));
    }

    public function edit(pelanggan $pelanggan): View
    {
        return view('pelanggan.edit', compact('pelanggan'));
    }

    public function update(Request $request, pelanggan $pelanggan): RedirectResponse
    {
        $validatedData = $request->validate([
            'nama_pelanggan' => 'required|string|max:255',
            'no_ktp' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
        ]);
        $validatedData['status'] = 1;

        try {
            $pelanggan->update($validatedData);
        } catch (\Illuminate\Database\QueryException $e) {
            if ($e->getCode() == '23000') {
                return redirect()->back()
                    ->withInput($request->all())
                    ->with('error', 'Data pelanggan ini sudah digunakan dan tidak dapat diperbarui.');
            }
            return redirect()->back()
                ->withInput($request->all())
                ->with('error', 'Terjadi kesalahan saat memperbarui data.');
        }

        return redirect()->route('pelanggan.index')
            ->with('success', 'Pelanggan berhasil diperbarui');
    }

    public function destroy(pelanggan $pelanggan): RedirectResponse
    {
        try {
            $pelanggan->delete();
        } catch (\Illuminate\Database\QueryException $e) {
            if ($e->getCode() == '23000') {
                return redirect()->route('pelanggan.index')
                    ->with('error', 'Data pelanggan ini sudah digunakan dan tidak dapat dihapus.');
            }
            return redirect()->route('pelanggan.index')
                ->with('error', 'Terjadi kesalahan saat menghapus data.');
        }

        return redirect()->route('pelanggan.index')
            ->with('success', 'Pelanggan berhasil dihapus');
    }
}
