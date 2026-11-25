<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operasional Pompa Intake - SPAM IKK Karimun</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#eef2f6] text-slate-800 antialiased overflow-x-hidden">
    <div id="sidebarBackdrop"
         onclick="toggleSidebar()"
         class="fixed inset-0 bg-slate-900/50 z-30 hidden md:hidden transition-opacity"></div>

    <div class="flex min-h-screen">
        {{-- Sidebar Kiri --}}
        <aside id="mobileSidebar"
               class="fixed inset-y-0 left-0 z-40 w-60 shrink-0 bg-[#084a75] text-white flex flex-col justify-between min-h-screen select-none -translate-x-full md:translate-x-0 md:static transition-transform duration-200 ease-out">
            <div>
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
                            <a href="{{ route('laporan.pompa.intake') }}"
                               class="block px-2.5 py-1.5 rounded-md bg-[#1d6391] text-white font-semibold shadow-xs">
                                Pompa Intake
                            </a>
                            <a href="{{ route('laporan.pompa.distribusi') }}"
                               class="block px-2.5 py-1.5 rounded-md text-sky-200/80 hover:text-white hover:bg-white/10 transition">
                                Pompa Distribusi
                            </a>
                            <a href="#"
                               class="block px-2.5 py-1.5 rounded-md text-sky-200/80 hover:text-white hover:bg-white/10 transition">
                                Pencampuran Larutan
                            </a>
                        </div>
                    </div>
                </nav>
            </div>

            <div class="p-3 border-t border-white/10">
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
                        <h1 class="text-[15px] font-bold text-slate-800 leading-tight truncate">Operasional Pompa Intake</h1>
                        <div class="text-[10px] sm:text-[11px] text-slate-400 mt-0.5 truncate">
                            Beranda &gt; Laporan Harian &gt; <span class="text-[#0a5a8c] font-semibold">Operasional Pompa Intake</span>
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

            <main class="p-4 sm:p-6 space-y-4 sm:space-y-5 max-w-[1440px] w-full mx-auto">
                {{-- Kartu Header & Navigasi Halaman --}}
                <div class="bg-white rounded-2xl border border-slate-200/80 p-4 sm:p-5 shadow-xs space-y-4">
                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3.5">
                        <div class="min-w-0">
                            <h2 class="text-base sm:text-lg font-bold text-[#084a75] tracking-tight leading-snug">
                                Laporan Harian Operasional Pompa Intake
                            </h2>
                            <p class="text-[11px] sm:text-xs text-slate-500 mt-0.5">
                                SPAM IKK Karimun Tahun 2026 · Klik <strong>+ Buat Laporan Baru</strong> untuk mengisi data operasional.
                            </p>
                        </div>

                        <button type="button"
                                onclick="bukaModalInput()"
                                class="w-full sm:w-auto inline-flex items-center justify-center gap-1.5 bg-[#0e5c8e] hover:bg-[#094a73] text-white font-semibold text-xs px-4 py-2.5 rounded-lg shadow-xs transition shrink-0 cursor-pointer">
                            <span class="text-sm font-bold leading-none">+</span>
                            <span>Buat Laporan Baru</span>
                        </button>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5 pt-2 border-t border-slate-100">
                        <a href="{{ route('laporan.pompa.intake') }}"
                           class="flex items-center justify-between px-4 py-2.5 rounded-xl border text-xs font-bold bg-[#084a75] text-white border-[#084a75] shadow-xs">
                            <span>Halaman 1: Operasional Pompa Intake</span>
                            <span class="text-[10px] font-semibold px-2 py-0.5 rounded bg-white/15">Aktif</span>
                        </a>

                        <a href="{{ route('laporan.pompa.distribusi') }}"
                           class="flex items-center justify-between px-4 py-2.5 rounded-xl border text-xs font-bold bg-slate-50 text-slate-700 border-slate-200 hover:bg-sky-50 transition">
                            <span>Halaman 2: Pompa Distribusi, Backwash &amp; PLN Trouble</span>
                            <span class="text-[10px] font-semibold px-2 py-0.5 rounded bg-sky-100 text-[#084a75]">Buka &rarr;</span>
                        </a>
                    </div>
                </div>

                {{-- SECTION 01: IDENTITAS LAPORAN (OUTPUT) --}}
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

                        <span id="badgeStatusLaporan"
                              class="inline-flex items-center gap-1.5 bg-emerald-50 border border-emerald-200 text-emerald-700 text-[9px] sm:text-[10px] font-bold px-2.5 py-1 rounded-full tracking-wide shrink-0">
                            <span>&#10003; DATA TAMPIL</span>
                        </span>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-[10px] font-bold uppercase tracking-wider text-slate-500 mb-1.5">
                                HARI
                            </label>
                            <div id="outHari"
                                 class="w-full rounded-lg border border-slate-200 bg-slate-100/80 px-3.5 py-2 text-xs font-semibold text-slate-700">
                                Selasa
                            </div>
                        </div>

                        <div>
                            <label class="block text-[10px] font-bold uppercase tracking-wider text-slate-500 mb-1.5">
                                TANGGAL
                            </label>
                            <div id="outTanggal"
                                 class="w-full rounded-lg border border-slate-200 bg-slate-100/80 px-3.5 py-2 text-xs font-semibold text-slate-700">
                                2026-01-13
                            </div>
                        </div>
                    </div>
                </section>

                {{-- SECTION 02: TABEL OUTPUT DATA OPERASIONAL POMPA INTAKE (TANPA KOLOM KETERANGAN) --}}
                <section class="bg-white rounded-2xl border border-slate-200/80 p-4 sm:p-5 shadow-xs space-y-4">
                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-1.5 border-b border-slate-100 pb-3">
                        <div class="flex items-center gap-2">
                            <span class="w-6 h-6 rounded-md bg-[#0e5c8e] text-white text-[11px] font-bold flex items-center justify-center shrink-0">
                                02
                            </span>
                            <h3 class="text-[11px] sm:text-xs font-bold tracking-wider uppercase text-[#084a75]">
                                DATA OPERASIONAL POMPA INTAKE
                            </h3>
                        </div>

                        <span class="text-[11px] font-medium text-[#0e5c8e]">
                            Klik ikon mata untuk melihat catatan kendala · Geser tabel di HP &rarr;
                        </span>
                    </div>

                    <div class="overflow-x-auto rounded-xl border border-slate-200/90">
                        <table class="min-w-[940px] w-full border-collapse text-xs">
                            <thead>
                                <tr class="text-white text-[10px] font-bold uppercase tracking-wider">
                                    <th colspan="2" class="bg-[#084a75] py-2.5 px-3 text-center border-r border-white/15">
                                        IDENTITAS OPERATOR
                                    </th>
                                    <th colspan="9" class="bg-[#116499] py-2.5 px-3 text-center border-r border-white/15">
                                        POMPA INTAKE
                                    </th>
                                    <th rowspan="3" class="w-24 bg-[#084a75] py-2.5 px-2 text-center">
                                        AKSI
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
                                </tr>

                                <tr class="bg-slate-50 border-b border-slate-200 text-[9px] font-bold uppercase text-slate-400">
                                    @for ($p = 0; $p < 3; $p++)
                                        <th class="w-16 py-1.5 px-1 text-center border-r border-slate-100">ON</th>
                                        <th class="w-16 py-1.5 px-1 text-center border-r border-slate-100">OFF</th>
                                        <th class="w-16 py-1.5 px-1 text-center text-[#084a75] border-r border-slate-200">TOTAL</th>
                                    @endfor
                                </tr>
                            </thead>

                            <tbody id="tbodyIntakeOutput" class="divide-y divide-slate-200 bg-white"></tbody>
                        </table>
                    </div>
                </section>

                <footer class="text-center text-[10px] font-semibold tracking-[0.14em] text-slate-400 uppercase pt-1 pb-2">
                    &copy; 2026 PERUMDA AIR MINUM IKK KARIMUN - SISTEM LAPORAN HARIAN TERINTEGRASI
                </footer>
            </main>
        </div>
    </div>

    {{-- MODAL POP-UP INPUT / EDIT DATA OPERASIONAL INTAKE (ADA CATATAN KENDALA) --}}
    <div id="modalInputLaporan"
         class="fixed inset-0 z-50 hidden items-center justify-center bg-slate-900/60 p-3 sm:p-5 backdrop-blur-[1px]">
        <div class="bg-white rounded-2xl border border-slate-200 shadow-xl max-w-5xl w-full max-h-[90vh] flex flex-col overflow-hidden">
            <div class="px-5 py-4 bg-[#084a75] text-white flex items-center justify-between gap-3">
                <div>
                    <h3 id="judulModalInput" class="text-sm sm:text-base font-bold">Input Data Operasional Pompa Intake</h3>
                    <p class="text-[11px] text-sky-200">Isi data operasional &amp; catatan kendala lalu klik Simpan ke Tabel</p>
                </div>
                <button type="button"
                        onclick="tutupModalInput()"
                        class="text-sky-100 hover:text-white font-bold px-2 py-1 rounded-lg cursor-pointer"
                        aria-label="Tutup Modal">
                    ✕
                </button>
            </div>

            <form id="formModalIntake" onsubmit="simpanKeTabel(event)" class="p-4 sm:p-5 overflow-y-auto space-y-4 text-xs">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 bg-slate-50 p-3.5 rounded-xl border border-slate-200">
                    <div>
                        <label for="inHari" class="block text-[10px] font-bold uppercase tracking-wider text-slate-500 mb-1">
                            HARI
                        </label>
                        <input type="text"
                               id="inHari"
                               value="Selasa"
                               readonly
                               class="w-full rounded-lg border border-slate-200 bg-slate-100 px-3 py-2 text-xs font-semibold text-slate-700">
                    </div>

                    <div>
                        <label for="inTanggal" class="block text-[10px] font-bold uppercase tracking-wider text-slate-500 mb-1">
                            TANGGAL
                        </label>
                        <input type="date"
                               id="inTanggal"
                               value="2026-01-13"
                               onchange="updateHariModal(this.value)"
                               class="w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-xs font-semibold text-slate-700 focus:border-[#0e5c8e] focus:outline-none">
                    </div>
                </div>

                <div class="overflow-x-auto rounded-xl border border-slate-200">
                    <table class="min-w-[960px] w-full border-collapse text-xs">
                        <thead>
                            <tr class="bg-[#084a75] text-white text-[10px] font-bold uppercase">
                                <th class="py-2 px-2 text-center border-r border-white/15">SHIFT</th>
                                <th class="py-2 px-2 text-center border-r border-white/15">NAMA OPERATOR</th>
                                <th colspan="3" class="py-2 px-2 text-center border-r border-white/15">POMPA 01</th>
                                <th colspan="3" class="py-2 px-2 text-center border-r border-white/15">POMPA 02</th>
                                <th colspan="3" class="py-2 px-2 text-center border-r border-white/15">POMPA 03</th>
                                <th class="py-2 px-2 text-center">CATATAN KENDALA</th>
                            </tr>
                            <tr class="bg-slate-100 text-[9px] font-bold text-slate-500 uppercase border-b border-slate-200">
                                <th class="py-1.5 px-1 border-r border-slate-200"></th>
                                <th class="py-1.5 px-2 border-r border-slate-200"></th>
                                @for ($p = 0; $p < 3; $p++)
                                    <th class="py-1.5 px-1 text-center border-r border-slate-200">ON</th>
                                    <th class="py-1.5 px-1 text-center border-r border-slate-200">OFF</th>
                                    <th class="py-1.5 px-1 text-center border-r border-slate-200">TOT</th>
                                @endfor
                                <th class="py-1.5 px-2"></th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-200 bg-white">
                            @foreach (['01', '02', '03'] as $s)
                                <tr>
                                    <td class="py-2 px-2 text-center font-bold border-r border-slate-200">{{ $s }}</td>
                                    <td class="py-2 px-2 border-r border-slate-200">
                                        <input type="text"
                                               id="in_op_{{ $s }}"
                                               placeholder="Ketik nama operator"
                                               class="w-full rounded-md border border-slate-200 px-2 py-1.5 text-xs focus:border-[#0e5c8e] focus:outline-none">
                                    </td>
                                    @foreach (['intake_1', 'intake_2', 'intake_3'] as $pk)
                                        <td class="py-2 px-1 text-center border-r border-slate-100">
                                            <input type="text"
                                                   id="in_{{ $s }}_{{ $pk }}_on"
                                                   placeholder="00:00"
                                                   oninput="hitungModalTotal('{{ $s }}', '{{ $pk }}')"
                                                   class="w-14 text-center rounded-md border border-slate-200 py-1 px-1 text-[11px] focus:border-[#0e5c8e] focus:outline-none">
                                        </td>
                                        <td class="py-2 px-1 text-center border-r border-slate-100">
                                            <input type="text"
                                                   id="in_{{ $s }}_{{ $pk }}_off"
                                                   placeholder="00:00"
                                                   oninput="hitungModalTotal('{{ $s }}', '{{ $pk }}')"
                                                   class="w-14 text-center rounded-md border border-slate-200 py-1 px-1 text-[11px] focus:border-[#0e5c8e] focus:outline-none">
                                        </td>
                                        <td class="py-2 px-1 text-center border-r border-slate-200">
                                            <input type="text"
                                                   id="in_{{ $s }}_{{ $pk }}_total"
                                                   value="—"
                                                   readonly
                                                   class="w-12 text-center rounded-md border border-slate-200 bg-slate-100 py-1 px-1 text-[11px] font-bold text-[#084a75]">
                                        </td>
                                    @endforeach
                                    <td class="py-2 px-2">
                                        <input type="text"
                                               id="in_kendala_{{ $s }}"
                                               placeholder="Tulis catatan kendala..."
                                               class="w-full rounded-md border border-slate-200 px-2 py-1.5 text-xs focus:border-[#0e5c8e] focus:outline-none">
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="pt-2 border-t border-slate-200 flex items-center justify-end gap-2">
                    <button type="button"
                            onclick="tutupModalInput()"
                            class="px-4 py-2 rounded-lg border border-slate-200 bg-white hover:bg-slate-50 text-xs font-semibold text-slate-600 cursor-pointer">
                        Tutup
                    </button>
                    <button type="submit"
                            class="px-5 py-2 rounded-lg bg-[#0e5c8e] hover:bg-[#094a73] text-white text-xs font-semibold cursor-pointer">
                        Simpan ke Tabel
                    </button>
                </div>
            </form>
        </div>
    </div>

    {{-- MODAL POP-UP DETAIL DATA (TOMBOL MATA — MENAMPILKAN CATATAN KENDALA) --}}
    <div id="modalDetailShift"
         class="fixed inset-0 z-50 hidden items-center justify-center bg-slate-900/60 p-4 backdrop-blur-[1px]">
        <div class="bg-white rounded-2xl border border-slate-200 shadow-xl max-w-lg w-full overflow-hidden">
            <div class="px-5 py-4 bg-[#084a75] text-white flex items-center justify-between">
                <h3 class="text-sm font-bold">Detail Operasional &amp; Catatan Kendala</h3>
                <button type="button"
                        onclick="tutupModalDetail()"
                        class="text-sky-100 hover:text-white font-bold px-2 py-1 cursor-pointer">
                    ✕
                </button>
            </div>
            <div id="isiModalDetail" class="p-5 space-y-3 text-xs text-slate-700"></div>
            <div class="px-5 py-3 bg-slate-50 border-t border-slate-200 flex justify-end">
                <button type="button"
                        onclick="tutupModalDetail()"
                        class="px-4 py-2 rounded-lg bg-[#0e5c8e] text-white text-xs font-semibold cursor-pointer">
                    Tutup
                </button>
            </div>
        </div>
    </div>

    <script>
        const pumpsIntake = ['intake_1', 'intake_2', 'intake_3'];
        let stateIntake = {
            hari: 'Selasa',
            tanggal: '2026-01-13',
            shifts: {
                '01': {
                    operator: 'Agus Setiawan',
                    kendala: 'Tidak ada kendala, operasi normal',
                    intake_1: { on: '08:00', off: '16:00', total: '8.0' },
                    intake_2: { on: '', off: '', total: '—' },
                    intake_3: { on: '', off: '', total: '—' },
                },
                '02': {
                    operator: '',
                    kendala: '',
                    intake_1: { on: '', off: '', total: '—' },
                    intake_2: { on: '', off: '', total: '—' },
                    intake_3: { on: '', off: '', total: '—' },
                },
                '03': {
                    operator: '',
                    kendala: '',
                    intake_1: { on: '', off: '', total: '—' },
                    intake_2: { on: '', off: '', total: '—' },
                    intake_3: { on: '', off: '', total: '—' },
                },
            }
        };

        function toggleSidebar() {
            const sidebar = document.getElementById('mobileSidebar');
            const backdrop = document.getElementById('sidebarBackdrop');
            sidebar.classList.toggle('-translate-x-full');
            backdrop.classList.toggle('hidden');
        }

        function updateHariModal(dateStr) {
            if (!dateStr) return;
            const hariIndo = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
            const d = new Date(dateStr + 'T00:00:00');
            if (!isNaN(d)) {
                document.getElementById('inHari').value = hariIndo[d.getDay()];
            }
        }

        function hitungModalTotal(shift, pk) {
            const onVal = document.getElementById(`in_${shift}_${pk}_on`).value.trim();
            const offVal = document.getElementById(`in_${shift}_${pk}_off`).value.trim();
            const totEl = document.getElementById(`in_${shift}_${pk}_total`);

            const parseTime = (v) => {
                const m = v.match(/^(\d{1,2})[:.](\d{2})$/);
                if (!m) return null;
                return parseInt(m[1], 10) * 60 + parseInt(m[2], 10);
            };

            const s = parseTime(onVal);
            const e = parseTime(offVal);
            if (s !== null && e !== null) {
                let diff = e - s;
                if (diff < 0) diff += 24 * 60;
                totEl.value = (diff / 60).toFixed(1);
            } else {
                totEl.value = '—';
            }
        }

        function bukaModalInput(focusShift = null) {
            document.getElementById('judulModalInput').textContent = focusShift
                ? `Edit Data Operasional Pompa Intake (Fokus Shift ${focusShift})`
                : 'Input Data Operasional Pompa Intake';

            document.getElementById('inHari').value = stateIntake.hari;
            document.getElementById('inTanggal').value = stateIntake.tanggal;

            ['01', '02', '03'].forEach(s => {
                document.getElementById(`in_op_${s}`).value = stateIntake.shifts[s].operator;
                document.getElementById(`in_kendala_${s}`).value = stateIntake.shifts[s].kendala;
                pumpsIntake.forEach(pk => {
                    document.getElementById(`in_${s}_${pk}_on`).value = stateIntake.shifts[s][pk].on;
                    document.getElementById(`in_${s}_${pk}_off`).value = stateIntake.shifts[s][pk].off;
                    document.getElementById(`in_${s}_${pk}_total`).value = stateIntake.shifts[s][pk].total;
                });
            });

            const modal = document.getElementById('modalInputLaporan');
            modal.classList.remove('hidden');
            modal.classList.add('flex');

            if (focusShift) {
                setTimeout(() => document.getElementById(`in_op_${focusShift}`)?.focus(), 50);
            }
        }

        function tutupModalInput() {
            const modal = document.getElementById('modalInputLaporan');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }

        function simpanKeTabel(e) {
            e.preventDefault();
            stateIntake.hari = document.getElementById('inHari').value || 'Selasa';
            stateIntake.tanggal = document.getElementById('inTanggal').value || '2026-01-13';

            ['01', '02', '03'].forEach(s => {
                stateIntake.shifts[s].operator = document.getElementById(`in_op_${s}`).value.trim();
                stateIntake.shifts[s].kendala = document.getElementById(`in_kendala_${s}`).value.trim();
                pumpsIntake.forEach(pk => {
                    stateIntake.shifts[s][pk] = {
                        on: document.getElementById(`in_${s}_${pk}_on`).value.trim(),
                        off: document.getElementById(`in_${s}_${pk}_off`).value.trim(),
                        total: document.getElementById(`in_${s}_${pk}_total`).value.trim() || '—',
                    };
                });
            });

            renderOutputIntake();
            tutupModalInput();
        }

        function renderOutputIntake() {
            document.getElementById('outHari').textContent = stateIntake.hari;
            document.getElementById('outTanggal').textContent = stateIntake.tanggal;

            const tbody = document.getElementById('tbodyIntakeOutput');
            tbody.innerHTML = ['01', '02', '03'].map(s => {
                const sh = stateIntake.shifts[s];
                const pumpCells = pumpsIntake.map(pk => {
                    const p = sh[pk];
                    const hasTot = p.total && p.total !== '—';
                    return `
                        <td class="py-3 px-1.5 text-center border-r border-slate-100 text-[11px] font-medium text-slate-700">${p.on || '—'}</td>
                        <td class="py-3 px-1.5 text-center border-r border-slate-100 text-[11px] font-medium text-slate-700">${p.off || '—'}</td>
                        <td class="py-3 px-1.5 text-center border-r border-slate-200">
                            <span class="inline-block w-12 py-1 px-1 rounded-md text-[11px] font-bold ${hasTot ? 'bg-sky-100/80 text-[#084a75]' : 'bg-slate-100 text-slate-400'}">
                                ${p.total || '—'}
                            </span>
                        </td>
                    `;
                }).join('');

                return `
                    <tr class="hover:bg-slate-50/60 transition">
                        <td class="py-3 px-2 text-center font-bold text-slate-700 border-r border-slate-200">${s}</td>
                        <td class="py-3 px-3 border-r border-slate-200 font-medium text-slate-700">${sh.operator || '—'}</td>
                        ${pumpCells}
                        <td class="py-3 px-2 text-center whitespace-nowrap">
                            <div class="inline-flex items-center justify-center gap-1.5">
                                <button type="button"
                                        onclick="lihatDetailShift('${s}')"
                                        title="Lihat Detail &amp; Catatan Kendala Shift ${s}"
                                        class="p-1.5 rounded-lg border border-slate-200 text-slate-600 hover:text-[#084a75] hover:bg-sky-50 transition cursor-pointer">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                    </svg>
                                </button>
                                <button type="button"
                                        onclick="bukaModalInput('${s}')"
                                        title="Edit Data Shift ${s}"
                                        class="p-1.5 rounded-lg border border-slate-200 text-slate-600 hover:text-amber-700 hover:bg-amber-50 transition cursor-pointer">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                `;
            }).join('');
        }

        function lihatDetailShift(s) {
            const sh = stateIntake.shifts[s];
            const rows = pumpsIntake.map((pk, idx) => {
                const p = sh[pk];
                return `<div class="flex justify-between py-1 border-b border-slate-100 last:border-b-0">
                    <span class="font-semibold">Pompa 0${idx + 1}</span>
                    <span>ON: <strong>${p.on || '—'}</strong> · OFF: <strong>${p.off || '—'}</strong> · Total: <strong class="text-[#084a75]">${p.total || '—'}</strong></span>
                </div>`;
            }).join('');

            document.getElementById('isiModalDetail').innerHTML = `
                <div class="bg-sky-50 border border-sky-100 rounded-xl p-3 flex justify-between">
                    <span><strong>Hari / Tanggal:</strong> ${stateIntake.hari}, ${stateIntake.tanggal}</span>
                    <span><strong>Shift:</strong> ${s}</span>
                </div>
                <div class="rounded-xl border border-slate-200 p-3 space-y-1">
                    <div><strong>Operator:</strong> ${sh.operator || '—'}</div>
                </div>
                <div class="rounded-xl border border-slate-200 p-3">${rows}</div>
                <div class="rounded-xl border border-amber-200 bg-amber-50/60 p-3">
                    <div class="text-[10px] font-bold uppercase tracking-wider text-amber-800 mb-1">Catatan Kendala</div>
                    <div class="text-slate-800">${sh.kendala || 'Tidak ada catatan kendala.'}</div>
                </div>
            `;

            const m = document.getElementById('modalDetailShift');
            m.classList.remove('hidden');
            m.classList.add('flex');
        }

        function tutupModalDetail() {
            const m = document.getElementById('modalDetailShift');
            m.classList.add('hidden');
            m.classList.remove('flex');
        }

        renderOutputIntake();
    </script>
</body>
</html>