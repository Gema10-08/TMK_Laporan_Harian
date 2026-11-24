<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - SPAM IKK Karimun</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#eef2f6] text-slate-800 antialiased">
    <div class="flex min-h-screen">
        {{-- Sidebar Kiri --}}
        <aside class="w-60 shrink-0 bg-[#084a75] text-white flex flex-col justify-between min-h-screen select-none">
            <div>
                {{-- Brand Header --}}
                <div class="px-4 py-4 border-b border-white/10 flex items-center gap-3">
                    <div class="w-9 h-9 rounded-lg bg-white text-[#084a75] font-extrabold text-[11px] flex items-center justify-center shrink-0 overflow-hidden shadow-sm">
                        <img src="{{ asset('images/logo-tirta-mulia.jpeg') }}"
                             alt="SPAM"
                             onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                             class="w-full h-full object-contain p-0.5">
                        <span style="display:none;" class="w-full h-full items-center justify-center font-extrabold text-[10px]">SPAM</span>
                    </div>
                    <div class="min-w-0">
                        <div class="text-[13px] font-bold leading-tight truncate">SPAM IKK Karimun</div>
                        <div class="text-[8px] font-semibold tracking-[0.14em] uppercase text-sky-200/75 mt-0.5 truncate">
                            SISTEM LAPORAN HARIAN
                        </div>
                    </div>
                </div>

                {{-- Menu Navigasi --}}
                <nav class="px-3 py-4 space-y-1 text-xs">
                    <a href="{{ route('dashboard') }}"
                       class="flex items-center gap-2.5 px-3 py-2.5 rounded-lg bg-[#1d6391] text-white font-semibold shadow-xs">
                        <svg class="w-4 h-4 text-white shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/>
                        </svg>
                        <span>Dashboard</span>
                    </a>

                    <div class="pt-2">
                        <div class="flex items-center justify-between px-3 py-2 text-sky-100/85 font-medium">
                            <span class="flex items-center gap-2.5">
                                <svg class="w-4 h-4 text-sky-200/80 shrink-0" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                </svg>
                                <span>Laporan Harian</span>
                            </span>
                            <svg class="w-3.5 h-3.5 text-sky-200/75" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </div>

                        <div class="pl-8 pr-2 space-y-1 mt-0.5 text-[11px]">
                            <a href="{{ route('laporan.pompa') }}"
                               class="block px-2.5 py-1.5 rounded-md text-sky-200/80 hover:text-white hover:bg-white/10 transition">
                                Operasional Pompa
                            </a>
                            <a href="#"
                               class="block px-2.5 py-1.5 rounded-md text-sky-200/80 hover:text-white hover:bg-white/10 transition">
                                Pencampuran Larutan
                            </a>
                        </div>
                    </div>
                </nav>
            </div>

            {{-- Footer Profil & Keluar --}}
            <div class="p-3 border-t border-white/10 space-y-2.5">
                <div class="flex items-center gap-2.5 px-1.5 py-1">
                    <div class="w-8 h-8 rounded-full bg-[#246894] text-white font-bold text-[11px] flex items-center justify-center shrink-0">
                        AS
                    </div>
                    <div class="min-w-0">
                        <div class="text-xs font-semibold text-white truncate">Agus Setiawan</div>
                        <div class="text-[9px] tracking-wider text-sky-200/70 uppercase">PEGAWAI</div>
                    </div>
                </div>

                <a href="{{ route('login') }}"
                   class="w-full py-2 px-3 rounded-lg bg-white/10 hover:bg-white/15 border border-white/10 text-[11px] font-medium text-white/90 flex items-center justify-center gap-1.5 transition">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                    </svg>
                    <span>Keluar</span>
                </a>
            </div>
        </aside>

        {{-- Konten Utama --}}
        <div class="flex-1 flex flex-col min-w-0">
            {{-- Topbar --}}
            <header class="bg-white border-b border-slate-200/80 px-6 py-3 flex items-center justify-between">
                <div>
                    <h1 class="text-[15px] font-bold text-slate-800 leading-tight">Dashboard</h1>
                    <div class="text-[11px] text-slate-400 mt-0.5">
                        Beranda &gt; <span class="text-[#0a5a8c] font-semibold">Dashboard</span>
                    </div>
                </div>

                <div class="flex items-center gap-4">
                    <button type="button" class="text-slate-400 hover:text-slate-600 transition cursor-pointer" title="Notifikasi">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                        </svg>
                    </button>

                    <div class="flex items-center gap-2.5">
                        <div class="text-right leading-tight">
                            <div class="text-xs font-semibold text-slate-800">Agus Setiawan</div>
                            <div class="text-[10px] text-slate-400">Operasional IKK</div>
                        </div>
                        <div class="w-8 h-8 rounded-full bg-slate-200 text-[#084a75] font-bold text-xs flex items-center justify-center overflow-hidden border border-slate-300/70">
                            AS
                        </div>
                    </div>
                </div>
            </header>

            {{-- Body Dashboard --}}
            <main class="p-6 space-y-5 max-w-[1440px] w-full mx-auto">
                {{-- Hero Banner --}}
                <div class="relative overflow-hidden rounded-2xl bg-gradient-to-r from-[#0e5c8e] via-[#0a5280] to-[#08456d] text-white px-7 py-6 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 shadow-sm">
                    <div class="pointer-events-none absolute right-24 -top-14 w-56 h-56 rounded-full bg-white/[0.05]"></div>
                    <div class="pointer-events-none absolute -right-8 -bottom-16 w-48 h-48 rounded-full bg-white/[0.04]"></div>

                    <div class="relative z-10">
                        <div class="text-xs text-sky-200/90 font-normal">Selamat pagi,</div>
                        <h2 class="text-[26px] font-bold tracking-tight text-white leading-snug mt-0.5">
                            Halo, Agus Setiawan
                        </h2>
                        <div class="flex flex-wrap items-center gap-2.5 mt-3 text-[11px]">
                            <span class="inline-flex items-center gap-1.5 bg-white/15 border border-white/10 px-3 py-1 rounded-md font-medium text-white">
                                <svg class="w-3.5 h-3.5 text-sky-200" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                                {{ $todayLabel ?? 'Selasa, 13 Januari 2026' }}
                            </span>
                            <span class="text-sky-100/80 italic">
                                Pastikan laporan shift hari ini sudah tercatat.
                            </span>
                        </div>
                    </div>

                    <a href="{{ route('laporan.pompa') }}"
                       class="relative z-10 inline-flex items-center justify-center gap-1.5 bg-white hover:bg-sky-50 text-[#084a75] font-semibold text-xs px-4 py-2.5 rounded-lg shadow-sm transition shrink-0">
                        <span class="text-sm font-bold leading-none">+</span>
                        <span>Buat Laporan</span>
                    </a>
                </div>

                {{-- 3 Kartu Shift --}}
                @php
                    $shiftList = $shifts ?? [
                        [
                            'nama' => 'Shift 1',
                            'jam' => 'PUKUL 08:00 - 16:00',
                            'pompa_status' => 'SUDAH DIISI',
                            'larutan_status' => 'SUDAH DIISI',
                            'top_border' => 'border-t-[3px] border-t-[#0e5c8e]',
                            'icon' => 'sun',
                        ],
                        [
                            'nama' => 'Shift 2',
                            'jam' => 'PUKUL 16:00 - 00:00',
                            'pompa_status' => 'BELUM DIISI',
                            'larutan_status' => 'BELUM DIISI',
                            'top_border' => 'border-t-[3px] border-t-slate-300',
                            'icon' => 'cloud-sun',
                        ],
                        [
                            'nama' => 'Shift 3',
                            'jam' => 'PUKUL 00:00 - 08:00',
                            'pompa_status' => 'BELUM DIISI',
                            'larutan_status' => 'BELUM DIISI',
                            'top_border' => 'border-t-[3px] border-t-[#1e1b4b]',
                            'icon' => 'moon',
                        ],
                    ];
                @endphp

                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    @foreach ($shiftList as $shift)
                        <div class="bg-white rounded-2xl border border-slate-200/80 {{ $shift['top_border'] ?? 'border-t-[3px] border-t-[#0e5c8e]' }} p-4 shadow-xs space-y-3">
                            <div class="flex items-start justify-between pb-1">
                                <div>
                                    <div class="text-sm font-bold text-slate-800">{{ $shift['nama'] }}</div>
                                    <div class="text-[9px] font-bold tracking-[0.08em] text-slate-400 uppercase mt-0.5">
                                        {{ $shift['jam'] }}
                                    </div>
                                </div>

                                @if (($shift['icon'] ?? '') === 'sun')
                                    <span class="text-amber-400 mt-0.5">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd"/>
                                        </svg>
                                    </span>
                                @elseif (($shift['icon'] ?? '') === 'moon')
                                    <span class="text-slate-400 mt-0.5">
                                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"/>
                                        </svg>
                                    </span>
                                @else
                                    <span class="text-slate-300 mt-0.5">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M5.5 16a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 16h-8z"/>
                                        </svg>
                                    </span>
                                @endif
                            </div>

                            <div class="flex items-center justify-between bg-slate-50/90 border border-slate-100 rounded-lg px-3 py-2 text-xs">
                                <span class="text-slate-600 font-medium">Operasional Pompa</span>
                                <span class="text-[9px] font-bold tracking-wider px-2 py-0.5 rounded {{ $shift['pompa_status'] === 'SUDAH DIISI' ? 'bg-emerald-100/90 text-emerald-700' : 'bg-amber-100/90 text-amber-700' }}">
                                    {{ $shift['pompa_status'] }}
                                </span>
                            </div>

                            <div class="flex items-center justify-between bg-slate-50/90 border border-slate-100 rounded-lg px-3 py-2 text-xs">
                                <span class="text-slate-600 font-medium">Pencampuran Larutan</span>
                                <span class="text-[9px] font-bold tracking-wider px-2 py-0.5 rounded {{ $shift['larutan_status'] === 'SUDAH DIISI' ? 'bg-emerald-100/90 text-emerald-700' : 'bg-amber-100/90 text-amber-700' }}">
                                    {{ $shift['larutan_status'] }}
                                </span>
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- Akses Cepat & Ringkasan Bulan Ini --}}
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-4">
                    {{-- Akses Cepat --}}
                    <div class="lg:col-span-6 bg-white rounded-2xl border border-slate-200/80 p-5 shadow-xs">
                        <div class="text-[10px] font-bold uppercase tracking-[0.08em] text-[#084a75] mb-3.5">
                            Akses Cepat
                        </div>
                        <div class="grid grid-cols-2 gap-3.5">
                            <a href="{{ route('laporan.pompa') }}"
                               class="rounded-xl border border-slate-300/80 hover:border-[#0e5c8e] bg-[#eef4f8] hover:bg-sky-50/80 py-5 px-4 flex flex-col items-center justify-center gap-2.5 text-center transition">
                                <div class="w-9 h-9 rounded-xl bg-white text-[#0e5c8e] shadow-2xs flex items-center justify-center">
                                    {{-- Ikon Keran Air (Faucet) --}}
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 3a1 1 0 0 1 1 1v1h2.5a1 1 0 1 1 0 2H13v1.5h2a5 5 0 0 1 5 5V16a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-2.5a1 1 0 0 0-1-1h-1.268a2 2 0 0 1-3.464 0H5a1 1 0 0 1-1-1v-2a1 1 0 0 1 1-1h5.268c.21-.364.482-.685.732-.94V7H8.5a1 1 0 1 1 0-2H11V4a1 1 0 0 1 1-1Z"/>
                                    </svg>
                                </div>
                                <span class="text-xs font-bold text-[#084a75]">Operasional Pompa</span>
                            </a>

                            <a href="#"
                               class="rounded-xl border border-sky-200/70 hover:border-[#0e5c8e] bg-[#f1f8fc] hover:bg-sky-50/80 py-5 px-4 flex flex-col items-center justify-center gap-2.5 text-center transition">
                                <div class="w-9 h-9 rounded-xl bg-white text-[#1e6ca0] shadow-2xs flex items-center justify-center">
                                    {{-- Ikon Tabung Reaksi (Test Tube) --}}
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M14.707 3.293a1 1 0 0 0-1.414 1.414l.293.293-7.586 7.586a3.5 3.5 0 0 0 4.95 4.95l7.586-7.586.293.293a1 1 0 0 0 1.414-1.414l-5.536-5.536Zm-4.243 7.071 4.536-4.536 2.121 2.121-2.536 2.536h-4.121v-.121Z"/>
                                    </svg>
                                </div>
                                <span class="text-xs font-bold text-[#084a75]">Pencampuran Larutan</span>
                            </a>
                        </div>
                    </div>

                    {{-- Ringkasan Bulan Ini --}}
                    <div class="lg:col-span-6 bg-white rounded-2xl border border-slate-200/80 p-5 shadow-xs">
                        <div class="text-[10px] font-bold uppercase tracking-[0.08em] text-slate-500 mb-3.5">
                            Ringkasan Bulan Ini
                        </div>
                        <div class="grid grid-cols-3 gap-3 text-center">
                            <div class="rounded-xl bg-slate-50/80 border border-slate-100 py-5 px-3 flex flex-col items-center justify-center">
                                <div class="text-[9px] font-bold tracking-[0.06em] text-slate-400 uppercase">Laporan Tersimpan</div>
                                <div class="text-base font-bold text-slate-700 mt-1.5">—</div>
                            </div>
                            <div class="rounded-xl bg-slate-50/80 border border-slate-100 py-5 px-3 flex flex-col items-center justify-center">
                                <div class="text-[9px] font-bold tracking-[0.06em] text-slate-400 uppercase">Shift Belum Diisi</div>
                                <div class="text-base font-bold text-slate-700 mt-1.5">—</div>
                            </div>
                            <div class="rounded-xl bg-slate-50/80 border border-slate-100 py-5 px-3 flex flex-col items-center justify-center">
                                <div class="text-[9px] font-bold tracking-[0.06em] text-slate-400 uppercase">Laporan Terakhir</div>
                                <div class="text-[11px] italic text-slate-400 mt-2">Belum tersedia</div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Riwayat Laporan Terbaru --}}
                @php
                    $riwayatList = $riwayat ?? [
                        [
                            'tanggal' => '12 Jan 2026',
                            'shift' => 'Shift 1',
                            'jenis' => 'Operasional Pompa',
                            'operator' => 'Agus Setiawan',
                            'status' => 'Tersimpan',
                        ],
                        [
                            'tanggal' => '12 Jan 2026',
                            'shift' => 'Shift 1',
                            'jenis' => 'Pencampuran Larutan',
                            'operator' => 'Agus Setiawan',
                            'status' => 'Tersimpan',
                        ],
                        [
                            'tanggal' => '11 Jan 2026',
                            'shift' => 'Shift 3',
                            'jenis' => 'Operasional Pompa',
                            'operator' => 'Budi Pratama',
                            'status' => 'Tersimpan',
                        ],
                        [
                            'tanggal' => '11 Jan 2026',
                            'shift' => 'Shift 2',
                            'jenis' => 'Operasional Pompa',
                            'operator' => 'Siti Aminah',
                            'status' => 'Tersimpan',
                        ],
                        [
                            'tanggal' => '11 Jan 2026',
                            'shift' => 'Shift 1',
                            'jenis' => 'Pencampuran Larutan',
                            'operator' => 'Agus Setiawan',
                            'status' => 'Tersimpan',
                        ],
                    ];
                @endphp

                <div class="bg-white rounded-2xl border border-slate-200/80 p-5 shadow-xs">
                    <div class="flex flex-wrap items-center justify-between gap-2 mb-4">
                        <div class="text-[10px] font-bold uppercase tracking-[0.08em] text-slate-500">
                            Riwayat Laporan Terbaru
                        </div>
                        <div class="flex items-center gap-3">
                            <button type="button"
                                    class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-md border border-slate-200 bg-white hover:bg-slate-50 text-[11px] font-medium text-slate-600 cursor-pointer">
                                <svg class="w-3 h-3 text-slate-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                                <span>Filter Tanggal</span>
                            </button>
                            <a href="#" class="text-[11px] font-semibold text-[#0e5c8e] hover:underline">
                                Lihat semua riwayat →
                            </a>
                        </div>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse text-xs">
                            <thead>
                                <tr class="border-b border-slate-200/80 text-[9px] font-bold uppercase tracking-[0.08em] text-slate-400">
                                    <th class="py-2.5 px-3">Tanggal</th>
                                    <th class="py-2.5 px-3">Shift</th>
                                    <th class="py-2.5 px-3">Jenis Laporan</th>
                                    <th class="py-2.5 px-3">Operator</th>
                                    <th class="py-2.5 px-3">Status</th>
                                    <th class="py-2.5 px-3 text-right">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100">
                                @foreach ($riwayatList as $item)
                                    <tr class="hover:bg-slate-50/70 transition">
                                        <td class="py-3 px-3 font-medium text-slate-700">{{ $item['tanggal'] }}</td>
                                        <td class="py-3 px-3 text-slate-500">{{ $item['shift'] }}</td>
                                        <td class="py-3 px-3">
                                            <span class="px-2.5 py-0.5 rounded-md text-[10px] font-semibold {{ str_contains($item['jenis'], 'Pompa') ? 'bg-sky-100/90 text-[#0e5c8e]' : 'bg-indigo-100/90 text-indigo-700' }}">
                                                {{ $item['jenis'] }}
                                            </span>
                                        </td>
                                        <td class="py-3 px-3 text-slate-500">{{ $item['operator'] }}</td>
                                        <td class="py-3 px-3 text-emerald-600 font-semibold text-[11px]">• {{ $item['status'] }}</td>
                                        <td class="py-3 px-3 text-right">
                                            <button type="button" class="text-slate-400 hover:text-[#0e5c8e] p-1 cursor-pointer" title="Lihat Detail">
                                                <svg class="w-4 h-4 inline" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>