<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanPompaController extends Controller
{
    public function index()
    {
        return view('laporan.pompa');
    }

    public function store(Request $request)
    {
        $validated =$request->validate([
            'hari' => ['required', 'string'],
            'tanggal' => ['required', 'date'],
            'catatan_kendala' => ['nullable', 'string'],
            'shifts' => ['required', 'array'],
        ]);

        // TODO: Simpan $validated ke database sesuai skema tabel Anda

        return redirect()
            ->route('laporan.pompa')
            ->with('success', 'Laporan berhasil disimpan dan masuk ke riwayat.');
    }
}