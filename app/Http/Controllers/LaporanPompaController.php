<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanPompaController extends Controller
{
    public function intake()
    {
        return view('laporan.pompa-intake');
    }

    public function simpanIntake(Request $request)
    {
        return back()->with('success', 'Laporan Operasional Pompa Intake berhasil disimpan.');
    }

    public function distribusi()
    {
        return view('laporan.pompa-distribusi');
    }

    public function simpanDistribusi(Request $request)
    {
        return back()->with('success', 'Laporan Operasional Pompa Distribusi, Backwash & PLN Trouble berhasil disimpan.');
    }
}