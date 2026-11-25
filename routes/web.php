<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/login', function () {
    return redirect()->route('dashboard');
})->name('login');

Route::get('/laporan/operasional-pompa', function () {
    return redirect()->route('laporan.pompa.intake');
})->name('laporan.pompa');

Route::get('/laporan/operasional-pompa/intake', function () {
    return view('laporan.pompa-intake');
})->name('laporan.pompa.intake');

Route::post('/laporan/operasional-pompa/intake', function () {
    return back();
})->name('laporan.pompa.intake.simpan');

Route::get('/laporan/operasional-pompa/distribusi', function () {
    return view('laporan.pompa-distribusi');
})->name('laporan.pompa.distribusi');

Route::post('/laporan/operasional-pompa/distribusi', function () {
    return back();
})->name('laporan.pompa.distribusi.simpan');