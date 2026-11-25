<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operasional Pompa - SPAM IKK Karimun</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#eef2f6] text-slate-800 antialiased overflow-x-hidden">
    {{-- Backdrop Gelap untuk Sidebar HP --}}
    <div id="sidebarBackdrop"
         onclick="toggleSidebar()"
         class="fixed inset-0 bg-slate-900/50 z-30 hidden md:hidden transition-opacity"></div>

    <div class="flex min-h-screen">
        {{-- Sidebar Kiri (Drawer di HP, Statis di Desktop) --}}
        <aside id="mobileSidebar"
               class="fixed inset-y-0 left-0 z-40 w-60 shrink-0 bg-[#084a75] text-white flex flex-col justify-between min-h-screen select-none -translate-x-full md:translate-x-0 md:static transition-transform duration-200 ease-out">
            <div>
                {{-- Brand Header --}}
                <div class="px-4 py-4 border-b border-white/10 flex items-center justify-between gap-2">
                    <div class="flex items-center gap-3 min-w-0">
                        <div class="w-8 h-8 rounded-lg bg-white text-[#084a75] font-extrabold text-[11px] flex items-center justify-center shrink-0 overflow-hidden shadow-sm"
                             style="width: 32px; height: 32px;">
                            <img src="{{ asset('images/logo-tirta-mulia.jpeg') }}"
                                 alt="SPAM"
                                 onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                                 class="w-full h-full object-contain p-0.5"
                                 style="width: 100%; height: 100%; object-fit: contain;">
                            <span style="display:none;" class="w-full h-full items-center justify-center font-extrabold text-[10px]">SPAM</span>
                        </div>
                        <div class="min-w-0">
                            <div class="text-[13px] font-bold leading-tight truncate">SPAM IKK Karimun</div>
                            <div class="text-[8px] font-semibold tracking-[0.14em] uppercase text-sky-200/75 mt-0.5 truncate">
                                SISTEM LAPORAN HARIAN
                            </div>
                        </div>
                    </div>

                    <button type="button"
                            onclick="toggleSidebar()"
                            class="md:hidden text-sky-200 hover:text-white p-1 rounded-md cursor-pointer"
                            aria-label="Tutup Menu">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>

                {{-- Menu Navigasi --}}
                <nav class="px-3 py-4 space-y-1 text-xs">
                    <a href="{{ route('dashboard') }}"
                       class="flex items-center gap-2.5 px-3 py-2.5 rounded-lg text-sky-100/85 hover:text-white hover:bg-white/10 font-medium transition">
                        <svg class="w-4 h-4 text-sky-200/80 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/>
                        </svg>
                        <span>Dashboard</span>
                    </a>

                    <div class="pt-2">
                        <div class="flex items-center justify-between px-3 py-2 text-white font-semibold">
                            <span class="flex items-center gap-2.5">
                                <svg class="w-4 h-4 text-sky-200 shrink-0" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
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
                               class="block px-2.5 py-1.5 rounded-md bg-[#1d6391] text-white font-semibold shadow-xs">
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
            <header class="bg-white border-b border-slate-200/80 px-4 sm:px-6 py-3 flex items-center justify-between gap-3">
                <div class="flex items-center gap-2.5 min-w-0">
                    <button type="button"
                            onclick="toggleSidebar()"
                            class="md:hidden p-1.5 rounded-lg border border-slate-200 text-slate-600 hover:bg-slate-50 shrink-0 cursor-pointer"
                            aria-label="Buka Menu">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>

                    <div class="min-w-0">
                        <h1 class="text-[15px] font-bold text-slate-800 leading-tight truncate">Operasional Pompa</h1>
                        <div class="text-[10px] sm:text-[11px] text-slate-400 mt-0.5 truncate">
                            Beranda &gt; Laporan Harian &gt; <span class="text-[#0a5a8c] font-semibold">Operasional Pompa</span>
                        </div>
                    </div>
                </div>

                <div class="flex items-center gap-2.5 sm:gap-4 shrink-0">
                    <button type="button" class="text-slate-400 hover:text-slate-600 transition cursor-pointer" title="Notifikasi">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                        </svg>
                    </button>

                    <div class="flex items-center gap-2 sm:gap-2.5">
                        <div class="text-right leading-tight hidden sm:block">
                            <div class="text-xs font-semibold text-slate-800">Agus Setiawan</div>
                            <div class="text-[10px] text-slate-400">Operasional IKK</div>
                        </div>
                        <div class="w-8 h-8 rounded-full bg-slate-200 text-[#084a75] font-bold text-xs flex items-center justify-center overflow-hidden border border-slate-300/70">
                            AS
                        </div>
                    </div>
                </div>
            </header>

            {{-- Body Form Operasional Pompa --}}
            <main class="p-4 sm:p-6 space-y-4 sm:space-y-5 max-w-[1440px] w-full mx-auto">
                {{-- Toast Notifikasi --}}
                <div id="toastSuccess"
                     class="hidden items-center justify-between gap-3 bg-emerald-600 text-white px-4 py-3 rounded-2xl shadow-sm text-xs">
                    <div class="flex items-center gap-2.5 min-w-0">
                        <span class="w-5 h-5 rounded-full bg-white/20 flex items-center justify-center font-bold shrink-0">✓</span>
                        <div class="min-w-0">
                            <div class="font-bold">Berhasil!</div>
                            <div class="text-emerald-50 text-[11px] leading-snug">Laporan berhasil disimpan dan masuk ke riwayat.</div>
                        </div>
                    </div>
                    <button type="button"
                            onclick="hideToast()"
                            class="text-white/80 hover:text-white font-bold px-1.5 shrink-0 cursor-pointer"
                            aria-label="Tutup notifikasi">
                        ✕
                    </button>
                </div>

                {{-- Kartu Header Halaman --}}
                <div class="bg-white rounded-2xl border border-slate-200/80 p-4 sm:p-5 shadow-xs flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3.5">
                    <div class="min-w-0">
                        <h2 class="text-base sm:text-lg font-bold text-[#084a75] tracking-tight leading-snug">
                            Laporan Harian Operasional Pompa Intake dan Distribusi
                        </h2>
                        <p class="text-[11px] sm:text-xs text-slate-500 mt-0.5">
                            SPAM IKK Karimun Tahun 2026 · Isi data sesuai kondisi lapangan pada setiap shift.
                        </p>
                    </div>

                    <button type="button"
                            onclick="resetFormLaporan()"
                            class="w-full sm:w-auto inline-flex items-center justify-center gap-1.5 bg-[#0e5c8e] hover:bg-[#094a73] text-white font-semibold text-xs px-4 py-2.5 rounded-lg shadow-xs transition shrink-0 cursor-pointer">
                        <span class="text-sm font-bold leading-none">+</span>
                        <span>Buat Laporan Baru</span>
                    </button>
                </div>

                <form id="formOperasionalPompa" action="#" method="POST" class="space-y-4 sm:space-y-5">
                    @csrf

                    {{-- SECTION 01: IDENTITAS LAPORAN --}}
                    <section class="bg-white rounded-2xl border border-slate-200/80 p-4 sm:p-5 shadow-xs space-y-4">
                        <div class="flex items-center justify-between gap-2 border-b border-slate-100 pb-3">
                            <div class="flex items-center gap-2 min-w-0">
                                <span class="w-6 h-6 rounded-md bg-[#0e5c8e] text-white text-[11px] font-bold flex items-center justify-center shrink-0">
                                    01
                                </span>
                                <h3 class="text-[11px] sm:text-xs font-bold tracking-wider uppercase text-[#084a75] truncate">
                                    IDENTITAS LAPORAN
                                </h3>
                            </div>

                            <span id="badgeStatusSimpan"
                                  class="inline-flex items-center gap-1.5 bg-amber-50 border border-amber-200/80 text-amber-700 text-[9px] sm:text-[10px] font-bold px-2.5 py-1 rounded-full tracking-wide shrink-0">
                                <svg class="w-3 h-3 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span>BELUM DISIMPAN</span>
                            </span>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="inputHari" class="block text-[10px] font-bold uppercase tracking-wider text-slate-500 mb-1.5">
                                    HARI
                                </label>
                                <input type="text"
                                       id="inputHari"
                                       name="hari"
                                       value="Selasa"
                                       readonly
                                       class="w-full rounded-lg border border-slate-200 bg-slate-100/80 px-3.5 py-2 text-xs font-medium text-slate-700 focus:outline-none">
                            </div>

                            <div>
                                <label for="inputTanggal" class="block text-[10px] font-bold uppercase tracking-wider text-slate-500 mb-1.5">
                                    TANGGAL
                                </label>
                                <input type="date"
                                       id="inputTanggal"
                                       name="tanggal"
                                       value="2026-01-13"
                                       onchange="updateHariOtomatis(this.value)"
                                       class="w-full rounded-lg border border-slate-200 bg-white px-3.5 py-2 text-xs font-medium text-slate-700 focus:border-[#0e5c8e] focus:ring-1 focus:ring-[#0e5c8e] focus:outline-none">
                            </div>
                        </div>
                    </section>

                    {{-- SECTION 02: INPUT DATA OPERASIONAL --}}
                    <section class="bg-white rounded-2xl border border-slate-200/80 p-4 sm:p-5 shadow-xs space-y-4">
                        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-1.5 border-b border-slate-100 pb-3">
                            <div class="flex items-center gap-2">
                                <span class="w-6 h-6 rounded-md bg-[#0e5c8e] text-white text-[11px] font-bold flex items-center justify-center shrink-0">
                                    02
                                </span>
                                <h3 class="text-[11px] sm:text-xs font-bold tracking-wider uppercase text-[#084a75]">
                                    INPUT DATA OPERASIONAL
                                </h3>
                            </div>

                            <span class="text-[11px] font-medium text-[#0e5c8e] inline-flex items-center gap-1">
                                <span>Geser tabel ke samping di HP</span>
                                <span>&rarr;</span>
                            </span>
                        </div>

                        <div class="overflow-x-auto rounded-xl border border-slate-200/90">
                            <table class="min-w-[1560px] w-full border-collapse text-xs">
                                <thead>
                                    <tr class="text-white text-[10px] font-bold uppercase tracking-wider">
                                        <th colspan="2" class="bg-[#084a75] py-2.5 px-3 text-center border-r border-white/15">
                                            IDENTITAS OPERATOR
                                        </th>
                                        <th colspan="10" class="bg-[#116499] py-2.5 px-3 text-center border-r border-white/15">
                                            POMPA INTAKE
                                        </th>
                                        <th colspan="10" class="bg-[#0d5482] py-2.5 px-3 text-center border-r border-white/15">
                                            POMPA DISTRIBUSI
                                        </th>
                                        <th colspan="3" class="bg-[#c98416] py-2.5 px-3 text-center border-r border-white/15">
                                            BACKWASH
                                        </th>
                                        <th colspan="3" class="bg-[#7c2d12] py-2.5 px-3 text-center">
                                            PLN TROUBLE
                                        </th>
                                    </tr>

                                    <tr class="bg-slate-50/90 border-b border-slate-200 text-slate-700">
                                        <th rowspan="2" class="w-16 py-2.5 px-2 text-center text-[10px] font-bold uppercase text-slate-500 border-r border-slate-200">
                                            SHIFT
                                        </th>
                                        <th rowspan="2" class="w-44 py-2.5 px-3 text-center text-[10px] font-bold uppercase text-slate-500 border-r border-slate-200">
                                            NAMA OPERATOR
                                        </th>

                                        <th colspan="3" class="py-2 px-2 text-center border-r border-slate-200">
                                            <div class="text-[10px] font-bold text-[#084a75]">POMPA 01</div>
                                            <div class="text-[9px] font-normal text-slate-400">11 kW · 25 lps</div>
                                        </th>
                                        <th colspan="3" class="py-2 px-2 text-center border-r border-slate-200">
                                            <div class="text-[10px] font-bold text-[#084a75]">POMPA 02</div>
                                            <div class="text-[9px] font-normal text-slate-400">11 kW · 25 lps</div>
                                        </th>
                                        <th colspan="3" class="py-2 px-2 text-center border-r border-slate-200">
                                            <div class="text-[10px] font-bold text-[#084a75]">POMPA 03</div>
                                            <div class="text-[9px] font-normal text-slate-400">30 kW · 50 lps</div>
                                        </th>
                                        <th rowspan="2" class="w-36 py-2 px-2 text-center text-[10px] font-bold uppercase text-slate-600 border-r border-slate-200">
                                            KETERANGAN
                                        </th>

                                        <th colspan="3" class="py-2 px-2 text-center border-r border-slate-200">
                                            <div class="text-[10px] font-bold text-[#084a75]">POMPA 01</div>
                                            <div class="text-[9px] font-normal text-slate-400">18,5 kW · 25 lps</div>
                                        </th>
                                        <th colspan="3" class="py-2 px-2 text-center border-r border-slate-200">
                                            <div class="text-[10px] font-bold text-[#084a75]">POMPA 02</div>
                                            <div class="text-[9px] font-normal text-slate-400">18,5 kW · 25 lps</div>
                                        </th>
                                        <th colspan="3" class="py-2 px-2 text-center border-r border-slate-200">
                                            <div class="text-[10px] font-bold text-[#084a75]">POMPA 03</div>
                                            <div class="text-[9px] font-normal text-slate-400">37 kW · 50 lps</div>
                                        </th>
                                        <th rowspan="2" class="w-36 py-2 px-2 text-center text-[10px] font-bold uppercase text-slate-600 border-r border-slate-200">
                                            KETERANGAN
                                        </th>

                                        {{-- Backwash --}}
                                        <th rowspan="2" class="w-16 py-2 px-1 text-center text-[9px] font-bold uppercase text-slate-500 border-r border-slate-100">
                                            ON
                                        </th>
                                        <th rowspan="2" class="w-16 py-2 px-1 text-center text-[9px] font-bold uppercase text-slate-500 border-r border-slate-100">
                                            OFF
                                        </th>
                                        <th rowspan="2" class="w-24 py-2 px-2 text-center text-[9px] font-bold uppercase text-slate-600 border-r border-slate-200">
                                            TOTAL
                                        </th>

                                        {{-- PLN Trouble --}}
                                        <th rowspan="2" class="w-16 py-2 px-1 text-center text-[9px] font-bold uppercase text-slate-500 border-r border-slate-100">
                                            ON
                                        </th>
                                        <th rowspan="2" class="w-16 py-2 px-1 text-center text-[9px] font-bold uppercase text-slate-500 border-r border-slate-100">
                                            OFF
                                        </th>
                                        <th rowspan="2" class="w-24 py-2 px-2 text-center text-[9px] font-bold uppercase text-slate-600">
                                            TOTAL
                                        </th>
                                    </tr>

                                    <tr class="bg-slate-50 border-b border-slate-200 text-[9px] font-bold uppercase text-slate-400">
                                        @for ($p = 0; $p < 6; $p++)
                                            <th class="w-16 py-1.5 px-1 text-center border-r border-slate-100">ON</th>
                                            <th class="w-16 py-1.5 px-1 text-center border-r border-slate-100">OFF</th>
                                            <th class="w-16 py-1.5 px-1 text-center text-[#084a75] border-r border-slate-200">TOTAL</th>
                                        @endfor
                                    </tr>
                                </thead>

                                <tbody class="divide-y divide-slate-200 bg-white">
                                    @php
                                        $operatorOptions = ['Agus Setiawan', 'Budi Pratama', 'Siti Aminah', 'Rizki Ramadhan'];
                                    @endphp

                                    @foreach (['01', '02', '03'] as $shiftNo)
                                        <tr class="hover:bg-slate-50/50 transition">
                                            <td class="py-3 px-2 text-center font-bold text-slate-700 border-r border-slate-200">
                                                {{ $shiftNo }}
                                            </td>

                                            <td class="py-3 px-3 border-r border-slate-200">
                                                <select name="shifts[{{ $shiftNo }}][operator]"
                                                        class="w-full rounded-lg border border-slate-200 bg-white px-2.5 py-2 text-xs font-medium text-slate-700 focus:border-[#0e5c8e] focus:outline-none">
                                                    <option value="">Pilih operator</option>
                                                    @foreach ($operatorOptions as $op)
                                                        <option value="{{ $op }}" {{ ($shiftNo === '01' && $op === 'Agus Setiawan') ? 'selected' : '' }}>
                                                            {{ $op }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </td>

                                            @foreach (['intake_1', 'intake_2', 'intake_3'] as $pompaKey)
                                                @php
                                                    $isDefaultFilled = ($shiftNo === '01' && $pompaKey === 'intake_1');
                                                @endphp
                                                <td class="py-3 px-1.5 text-center border-r border-slate-100">
                                                    <input type="text"
                                                           name="shifts[{{ $shiftNo }}][{{ $pompaKey }}][on]"
                                                           value="{{ $isDefaultFilled ? '08:00' : '' }}"
                                                           placeholder="0"
                                                           data-shift="{{ $shiftNo }}"
                                                           data-pump="{{ $pompaKey }}"
                                                           data-type="on"
                                                           oninput="hitungJamOperasional(this)"
                                                           class="w-14 text-center rounded-md border border-slate-200 py-1.5 px-1 text-[11px] font-medium text-slate-700 placeholder:text-slate-300 focus:border-[#0e5c8e] focus:outline-none">
                                                </td>
                                                <td class="py-3 px-1.5 text-center border-r border-slate-100">
                                                    <input type="text"
                                                           name="shifts[{{ $shiftNo }}][{{ $pompaKey }}][off]"
                                                           value="{{ $isDefaultFilled ? '16:00' : '' }}"
                                                           placeholder="0"
                                                           data-shift="{{ $shiftNo }}"
                                                           data-pump="{{ $pompaKey }}"
                                                           data-type="off"
                                                           oninput="hitungJamOperasional(this)"
                                                           class="w-14 text-center rounded-md border border-slate-200 py-1.5 px-1 text-[11px] font-medium text-slate-700 placeholder:text-slate-300 focus:border-[#0e5c8e] focus:outline-none">
                                                </td>
                                                <td class="py-3 px-1.5 text-center border-r border-slate-200">
                                                    <input type="text"
                                                           id="total_{{ $shiftNo }}_{{ $pompaKey }}"
                                                           name="shifts[{{ $shiftNo }}][{{ $pompaKey }}][total]"
                                                           value="{{ $isDefaultFilled ? '8.0' : '—' }}"
                                                           readonly
                                                           class="w-12 text-center rounded-md border border-slate-200/80 py-1.5 px-1 text-[11px] font-bold {{ $isDefaultFilled ? 'bg-sky-100/80 text-[#084a75]' : 'bg-slate-100 text-slate-400' }} focus:outline-none">
                                                </td>
                                            @endforeach

                                            <td class="py-3 px-2 border-r border-slate-200">
                                                <input type="text"
                                                       name="shifts[{{ $shiftNo }}][keterangan_intake]"
                                                       value="{{ $shiftNo === '01' ? 'Normal' : '' }}"
                                                       placeholder="..."
                                                       class="w-full rounded-md border border-slate-200 px-2.5 py-1.5 text-xs text-slate-700 placeholder:text-slate-300 focus:border-[#0e5c8e] focus:outline-none">
                                            </td>

                                            @foreach (['dist_1', 'dist_2', 'dist_3'] as $pompaKey)
                                                <td class="py-3 px-1.5 text-center border-r border-slate-100">
                                                    <input type="text"
                                                           name="shifts[{{ $shiftNo }}][{{ $pompaKey }}][on]"
                                                           placeholder="0"
                                                           data-shift="{{ $shiftNo }}"
                                                           data-pump="{{ $pompaKey }}"
                                                           data-type="on"
                                                           oninput="hitungJamOperasional(this)"
                                                           class="w-14 text-center rounded-md border border-slate-200 py-1.5 px-1 text-[11px] font-medium text-slate-700 placeholder:text-slate-300 focus:border-[#0e5c8e] focus:outline-none">
                                                </td>
                                                <td class="py-3 px-1.5 text-center border-r border-slate-100">
                                                    <input type="text"
                                                           name="shifts[{{ $shiftNo }}][{{ $pompaKey }}][off]"
                                                           placeholder="0"
                                                           data-shift="{{ $shiftNo }}"
                                                           data-pump="{{ $pompaKey }}"
                                                           data-type="off"
                                                           oninput="hitungJamOperasional(this)"
                                                           class="w-14 text-center rounded-md border border-slate-200 py-1.5 px-1 text-[11px] font-medium text-slate-700 placeholder:text-slate-300 focus:border-[#0e5c8e] focus:outline-none">
                                                </td>
                                                <td class="py-3 px-1.5 text-center border-r border-slate-200">
                                                    <input type="text"
                                                           id="total_{{ $shiftNo }}_{{ $pompaKey }}"
                                                           name="shifts[{{ $shiftNo }}][{{ $pompaKey }}][total]"
                                                           value="—"
                                                           readonly
                                                           class="w-12 text-center rounded-md border border-slate-200/80 bg-slate-100 py-1.5 px-1 text-[11px] font-bold text-slate-400 focus:outline-none">
                                                </td>
                                            @endforeach

                                            <td class="py-3 px-2 border-r border-slate-200">
                                                <input type="text"
                                                       name="shifts[{{ $shiftNo }}][keterangan_distribusi]"
                                                       placeholder="..."
                                                       class="w-full rounded-md border border-slate-200 px-2.5 py-1.5 text-xs text-slate-700 placeholder:text-slate-300 focus:border-[#0e5c8e] focus:outline-none">
                                            </td>

                                            {{-- Backwash --}}
                                            <td class="py-3 px-1.5 text-center border-r border-slate-100">
                                                <input type="text"
                                                       name="shifts[{{ $shiftNo }}][backwash][on]"
                                                       placeholder="0"
                                                       data-shift="{{ $shiftNo }}"
                                                       data-pump="backwash"
                                                       data-type="on"
                                                       oninput="hitungJamOperasional(this)"
                                                       class="w-14 text-center rounded-md border border-slate-200 py-1.5 px-1 text-[11px] font-medium text-slate-700 placeholder:text-slate-300 focus:border-[#0e5c8e] focus:outline-none">
                                            </td>
                                            <td class="py-3 px-1.5 text-center border-r border-slate-100">
                                                <input type="text"
                                                       name="shifts[{{ $shiftNo }}][backwash][off]"
                                                       placeholder="0"
                                                       data-shift="{{ $shiftNo }}"
                                                       data-pump="backwash"
                                                       data-type="off"
                                                       oninput="hitungJamOperasional(this)"
                                                       class="w-14 text-center rounded-md border border-slate-200 py-1.5 px-1 text-[11px] font-medium text-slate-700 placeholder:text-slate-300 focus:border-[#0e5c8e] focus:outline-none">
                                            </td>
                                            <td class="py-3 px-2 text-center border-r border-slate-200">
                                                <input type="text"
                                                       id="total_{{ $shiftNo }}_backwash"
                                                       name="shifts[{{ $shiftNo }}][backwash][total]"
                                                       placeholder="..."
                                                       readonly
                                                       class="w-20 text-center rounded-md border border-slate-200 bg-slate-50 py-1.5 px-2 text-[11px] font-semibold text-slate-500 placeholder:text-slate-300 focus:outline-none">
                                            </td>

                                            {{-- PLN Trouble --}}
                                            <td class="py-3 px-1.5 text-center border-r border-slate-100">
                                                <input type="text"
                                                       name="shifts[{{ $shiftNo }}][pln_trouble][on]"
                                                       placeholder="0"
                                                       data-shift="{{ $shiftNo }}"
                                                       data-pump="pln_trouble"
                                                       data-type="on"
                                                       oninput="hitungJamOperasional(this)"
                                                       class="w-14 text-center rounded-md border border-slate-200 py-1.5 px-1 text-[11px] font-medium text-slate-700 placeholder:text-slate-300 focus:border-[#0e5c8e] focus:outline-none">
                                            </td>
                                            <td class="py-3 px-1.5 text-center border-r border-slate-100">
                                                <input type="text"
                                                       name="shifts[{{ $shiftNo }}][pln_trouble][off]"
                                                       placeholder="0"
                                                       data-shift="{{ $shiftNo }}"
                                                       data-pump="pln_trouble"
                                                       data-type="off"
                                                       oninput="hitungJamOperasional(this)"
                                                       class="w-14 text-center rounded-md border border-slate-200 py-1.5 px-1 text-[11px] font-medium text-slate-700 placeholder:text-slate-300 focus:border-[#0e5c8e] focus:outline-none">
                                            </td>
                                            <td class="py-3 px-2 text-center">
                                                <input type="text"
                                                       id="total_{{ $shiftNo }}_pln_trouble"
                                                       name="shifts[{{ $shiftNo }}][pln_trouble][total]"
                                                       placeholder="..."
                                                       readonly
                                                       class="w-20 text-center rounded-md border border-slate-200 bg-slate-50 py-1.5 px-2 text-[11px] font-semibold text-slate-500 placeholder:text-slate-300 focus:outline-none">
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </section>

                    {{-- SECTION 03: CATATAN KENDALA OPERASIONAL --}}
                    <section class="bg-white rounded-2xl border border-slate-200/80 p-4 sm:p-5 shadow-xs space-y-3">
                        <div class="flex items-center gap-2 border-b border-slate-100 pb-3">
                            <span class="w-6 h-6 rounded-md bg-[#0e5c8e] text-white text-[11px] font-bold flex items-center justify-center shrink-0">
                                03
                            </span>
                            <h3 class="text-[11px] sm:text-xs font-bold tracking-wider uppercase text-[#084a75]">
                                CATATAN KENDALA OPERASIONAL
                            </h3>
                        </div>

                        <textarea name="catatan_kendala"
                                  rows="3"
                                  placeholder="Tuliskan kendala operasional jika ada..."
                                  class="w-full rounded-xl border border-slate-200 p-3 sm:p-3.5 text-xs text-slate-700 placeholder:text-slate-400 focus:border-[#0e5c8e] focus:ring-1 focus:ring-[#0e5c8e] focus:outline-none"></textarea>
                    </section>

                    {{-- FOOTER ACTION BAR --}}
                    <div class="bg-white rounded-2xl border border-slate-200/80 px-4 sm:px-5 py-3.5 shadow-xs flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
                        <div class="text-[11px] text-slate-400">
                            <span class="text-rose-500 font-bold">*</span> Field bertanda wajib diisi
                        </div>

                        <div class="flex items-center justify-end gap-2.5">
                            <a href="{{ route('dashboard') }}"
                               class="flex-1 sm:flex-initial text-center px-4 py-2 rounded-lg border border-slate-200 bg-white hover:bg-slate-50 text-xs font-semibold text-slate-600 transition">
                                Batal
                            </a>
                            <button type="submit"
                                    onclick="simulasiSimpan(event)"
                                    class="flex-1 sm:flex-initial inline-flex items-center justify-center gap-1.5 px-5 py-2 rounded-lg bg-[#0e5c8e] hover:bg-[#094a73] text-white text-xs font-semibold shadow-xs transition cursor-pointer">
                                <svg class="w-3.5 h-3.5 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4"/>
                                </svg>
                                <span>Simpan Laporan</span>
                            </button>
                        </div>
                    </div>
                </form>

                <footer class="text-center text-[10px] font-semibold tracking-[0.14em] text-slate-400 uppercase pt-1 pb-2">
                    &copy; 2026 PERUMDA AIR MINUM IKK KARIMUN - SISTEM LAPORAN HARIAN TERINTEGRASI
                </footer>
            </main>
        </div>
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('mobileSidebar');
            const backdrop = document.getElementById('sidebarBackdrop');
            sidebar.classList.toggle('-translate-x-full');
            backdrop.classList.toggle('hidden');
        }

        function hideToast() {
            const toast = document.getElementById('toastSuccess');
            toast.classList.add('hidden');
            toast.classList.remove('flex');
        }

        function updateHariOtomatis(dateStr) {
            if (!dateStr) return;
            const hariIndo = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
            const dateObj = new Date(dateStr + 'T00:00:00');
            if (!isNaN(dateObj)) {
                document.getElementById('inputHari').value = hariIndo[dateObj.getDay()];
            }
        }

        function hitungJamOperasional(el) {
            const shift = el.dataset.shift;
            const pump = el.dataset.pump;
            const onInput = document.querySelector(`[data-shift="${shift}"][data-pump="${pump}"][data-type="on"]`);
            const offInput = document.querySelector(`[data-shift="${shift}"][data-pump="${pump}"][data-type="off"]`);
            const totalField = document.getElementById(`total_${shift}_${pump}`);

            if (!onInput || !offInput || !totalField) return;

            const parseTime = (val) => {
                const match = val.trim().match(/^(\d{1,2})[:.](\d{2})$/);
                if (!match) return null;
                return parseInt(match[1], 10) * 60 + parseInt(match[2], 10);
            };

            const startMins = parseTime(onInput.value);
            const endMins = parseTime(offInput.value);

            if (startMins !== null && endMins !== null) {
                let diff = endMins - startMins;
                if (diff < 0) diff += 24 * 60;
                const hours = (diff / 60).toFixed(1);
                totalField.value = hours;
                if (!['backwash', 'pln_trouble'].includes(pump)) {
                    totalField.className = 'w-12 text-center rounded-md border border-slate-200/80 py-1.5 px-1 text-[11px] font-bold bg-sky-100/80 text-[#084a75] focus:outline-none';
                }
            }
        }

        function resetFormLaporan() {
            document.getElementById('formOperasionalPompa').reset();
            document.querySelectorAll('[id^="total_"]').forEach(el => {
                if (!el.id.endsWith('backwash') && !el.id.endsWith('pln_trouble')) {
                    el.value = '—';
                    el.className = 'w-12 text-center rounded-md border border-slate-200/80 bg-slate-100 py-1.5 px-1 text-[11px] font-bold text-slate-400 focus:outline-none';
                } else {
                    el.value = '';
                }
            });

            const badge = document.getElementById('badgeStatusSimpan');
            badge.className = 'inline-flex items-center gap-1.5 bg-amber-50 border border-amber-200/80 text-amber-700 text-[9px] sm:text-[10px] font-bold px-2.5 py-1 rounded-full tracking-wide shrink-0';
            badge.innerHTML = '<span>&#8635;</span><span>BELUM DISIMPAN</span>';
            hideToast();
        }

        function simulasiSimpan(e) {
            e.preventDefault();
            const toast = document.getElementById('toastSuccess');
            toast.classList.remove('hidden');
            toast.classList.add('flex');

            const badge = document.getElementById('badgeStatusSimpan');
            badge.className = 'inline-flex items-center gap-1.5 bg-emerald-50 border border-emerald-200 text-emerald-700 text-[9px] sm:text-[10px] font-bold px-2.5 py-1 rounded-full tracking-wide shrink-0';
            badge.innerHTML = '<span>&#10003; TERSIMPAN</span>';
        }
    </script>
</body>
</html>