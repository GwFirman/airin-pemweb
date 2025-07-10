<?php

namespace App\Http\Controllers;

use App\Models\layanan;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use \Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Woo\GridView\DataProviders\EloquentDataProvider;

class layananController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            // new Middleware('permission:layanan view', only: ['index', 'show']),
            // new Middleware('permission:layanan create', only: ['create', 'store']),
            // new Middleware('permission:layanan edit', only: ['edit', 'update']),
            // new Middleware('permission:layanan delete', only: ['destroy']),
        ];
    }

    public function index(Request $request): View
    {
        $query = layanan::query();

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

        $layanan = $query->paginate(10);

        if ($request->header('HX-Request')) {
            return view('layanan.includes.index-table', compact('layanan'));
        }

        return view('layanan.index', compact('layanan', 'columns', 'selectedColumns'));
    }

    public function create(): View
    {
        $layanan = new layanan();

        return view('layanan.create', compact('layanan'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'nama_layanan' => 'required|string|max:255',
        ]);

        try {
            layanan::create($validatedData);
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()
                ->withInput($request->all())
                ->with('error', 'Terjadi kesalahan saat membuat data.');
        }

        return redirect()->route('layanan.index')
            ->with('success', 'Layanan berhasil dibuat');
    }

    public function show(layanan $layanan): View
    {
        return view('layanan.show', compact('layanan'));
    }

    public function edit(layanan $layanan): View
    {
        return view('layanan.edit', compact('layanan'));
    }

    public function update(Request $request, layanan $layanan): RedirectResponse
    {
        $validatedData = $request->validate([
            'nama_layanan' => 'required|string|max:255',
        ]);

        try {
            $layanan->update($validatedData);
        } catch (\Illuminate\Database\QueryException $e) {
            if ($e->getCode() == '23000') {
                return redirect()->back()
                    ->withInput($request->all())
                    ->with('error', 'Data layanan ini sudah digunakan dan tidak dapat diperbarui.');
            }
            return redirect()->back()
                ->withInput($request->all())
                ->with('error', 'Terjadi kesalahan saat memperbarui data.');
        }

        return redirect()->route('layanan.index')
            ->with('success', 'Layanan berhasil diperbarui');
    }

    public function destroy(layanan $layanan): RedirectResponse
    {
        try {
            $layanan->delete();
        } catch (\Illuminate\Database\QueryException $e) {
            if ($e->getCode() == '23000') {
                return redirect()->route('layanan.index')
                    ->with('error', 'Data layanan ini sudah digunakan dan tidak dapat dihapus.');
            }
            return redirect()->route('layanan.index')
                ->with('error', 'Terjadi kesalahan saat menghapus data.');
        }

        return redirect()->route('layanan.index')
            ->with('success', 'Layanan berhasil dihapus');
    }
}
