<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'SPAM IKK Karimun' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#eef2f6] text-slate-800 antialiased">
    {{-- Toast Notifikasi Berhasil --}}
    <div id="toastSuccess"
         class="hidden fixed top-4 left-1/2 -translate-x-1/2 z-50 bg-[#0d8a52] text-white px-4 py-3 rounded-xl shadow-lg items-center gap-3 min-w-[320px] max-w-md border border-emerald-400/20">
        <div class="w-6 h-6 rounded-full bg-white text-[#0d8a52] flex items-center justify-center shrink-0">
            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
            </svg>
        </div>
        <div class="flex-1 text-left">
            <div class="text-xs font-bold leading-tight">Berhasil!</div>
            <div class="text-[11px] text-emerald-100 mt-0.5">
                Laporan berhasil disimpan dan masuk ke riwayat.
            </div>
        </div>
        <button type="button"
                onclick="document.getElementById('toastSuccess').classList.add('hidden')"
                class="text-emerald-200 hover:text-white p-1 cursor-pointer">
            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>
    </div>

    <div class="flex min-h-screen">
        <x-sidebar :active="$activeMenu ?? ''" />

        <div class="flex-1 flex flex-col min-w-0">
            {{-- Topbar --}}
            <header class="bg-white border-b border-slate-200/80 px-6 py-3 flex items-center justify-between">
                <div>
                    <h1 class="text-[15px] font-bold text-slate-800 leading-tight">{{ $headerTitle ?? 'Dashboard' }}</h1>
                    <div class="text-[9px] text-slate-400 mt-0.5 uppercase tracking-wide font-medium">
                        {!! $breadcrumb ?? 'BERANDA &gt; <span class="text-[#0a5a8c] font-bold">DASHBOARD</span>' !!}
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

            {{-- Konten Halaman --}}
            <main class="p-6 space-y-5 max-w-[1440px] w-full mx-auto flex-1">
                {{ $slot }}

                <footer class="text-center text-[9px] font-semibold tracking-[0.12em] text-slate-400 uppercase pt-2 pb-4">
                    &copy; 2026 PERUMDA AIR MINUM IKK KARIMUN - SISTEM LAPORAN HARIAN TERINTEGRASI
                </footer>
            </main>
        </div>
    </div>

    @stack('scripts')
</body>
</html>