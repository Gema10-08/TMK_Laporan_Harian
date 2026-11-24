<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SPAM IKK Karimun</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-slate-200 flex items-center justify-center p-3 sm:p-6">
    <div class="w-full max-w-6xl min-h-[660px] rounded-2xl shadow-xl overflow-hidden grid grid-cols-1 lg:grid-cols-12 bg-slate-200">

        {{-- Panel Kiri (Biru SPAM IKK Karimun) --}}
        <div class="lg:col-span-7 relative overflow-hidden bg-gradient-to-br from-[#0a5a8c] via-[#074d7a] to-[#053b5e] text-white p-8 sm:p-12 flex flex-col justify-between">
            <div class="pointer-events-none absolute -top-24 -right-24 w-80 h-80 rounded-full bg-white/[0.04]"></div>
            <div class="pointer-events-none absolute -bottom-28 -left-20 w-80 h-80 rounded-full bg-white/[0.04]"></div>

            <div class="relative z-10">
                {{-- Header Brand + Logo Tirta Mulia --}}
                <div class="flex items-center gap-3.5 mb-12">
                    <div class="w-12 h-12 rounded-xl bg-white shadow-md flex items-center justify-center shrink-0 overflow-hidden p-1">
                        <img src="{{ asset('images/logo-tirta-mulia.jpeg') }}" alt="Logo Tirta Mulia" class="w-full h-full object-contain">
                    </div>
                    <div>
                        <div class="text-base sm:text-lg font-bold tracking-tight leading-tight text-white">
                            SPAM IKK Karimun
                        </div>
                        <div class="text-[10px] font-semibold tracking-[0.18em] uppercase text-sky-200/90 mt-0.5">
                            SISTEM LAPORAN HARIAN
                        </div>
                    </div>
                </div>

                {{-- Badge Operasional 2026 --}}
                <div class="inline-block bg-white/10 border border-white/15 text-sky-100 text-[10px] font-bold tracking-[0.14em] uppercase px-3 py-1 rounded-full mb-5">
                    OPERASIONAL 2026
                </div>

                {{-- Judul Utama --}}
                <h1 class="text-3xl sm:text-[42px] font-extrabold leading-[1.12] tracking-tight text-white max-w-lg mb-5">
                    Laporan Harian Operasional Pompa Intake dan Distribusi
                </h1>

                {{-- Deskripsi --}}
                <p class="text-sm text-sky-100/85 leading-relaxed max-w-lg mb-9">
                    Platform terintegrasi untuk pencatatan operasional harian, pengelolaan akun pegawai, dan rekapitulasi produksi air bulanan secara real-time.
                </p>

                {{-- 3 Poin Fitur --}}
                <div class="space-y-4 max-w-lg">
                    <div class="flex items-start gap-3.5">
                        <div class="w-8 h-8 rounded-lg bg-white/10 border border-white/10 flex items-center justify-center shrink-0 mt-0.5 text-sky-200">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div>
                            <div class="text-sm font-bold text-white leading-snug">Pencatatan harian per shift</div>
                            <div class="text-xs text-sky-200/80 mt-0.5">Input data debit dan tekanan air setiap pergantian regu.</div>
                        </div>
                    </div>

                    <div class="flex items-start gap-3.5">
                        <div class="w-8 h-8 rounded-lg bg-white/10 border border-white/10 flex items-center justify-center shrink-0 mt-0.5 text-sky-200">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                        </div>
                        <div>
                            <div class="text-sm font-bold text-white leading-snug">Rekap bulanan otomatis</div>
                            <div class="text-xs text-sky-200/80 mt-0.5">Generasi laporan produksi otomatis tanpa input manual berulang.</div>
                        </div>
                    </div>

                    <div class="flex items-start gap-3.5">
                        <div class="w-8 h-8 rounded-lg bg-white/10 border border-white/10 flex items-center justify-center shrink-0 mt-0.5 text-sky-200">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4"/>
                            </svg>
                        </div>
                        <div>
                            <div class="text-sm font-bold text-white leading-snug">Riwayat laporan terpusat</div>
                            <div class="text-xs text-sky-200/80 mt-0.5">Akses data historis kapanpun dibutuhkan dengan sistem filter cerdas.</div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Footer Kiri --}}
            <div class="relative z-10 flex items-center gap-3 pt-10 mt-8">
                <span class="w-6 h-[1px] bg-sky-200/50"></span>
                <span class="text-[10px] font-semibold tracking-[0.16em] uppercase text-sky-200/80">
                    PERUMDA AIR MINUM / IKK KARIMUN 2026
                </span>
            </div>
        </div>

        {{-- Panel Kanan (Abu-abu dengan Kartu Form Kecil di Tengah) --}}
        <div class="lg:col-span-5 bg-[#e5e7eb] p-6 sm:p-8 flex items-center justify-center">
            <div class="w-full max-w-[360px] bg-white rounded-2xl shadow-md border border-slate-200/80 p-6 sm:p-7">
                <div class="text-center mb-5">
                    <h2 class="text-lg font-bold text-slate-800">Selamat Datang</h2>
                    <p class="text-[11px] text-slate-500 mt-1 leading-relaxed">
                        Masuk menggunakan akun yang diberikan oleh Superadmin
                    </p>
                </div>

                <div class="space-y-3.5">
                    <div>
                        <label for="login" class="block text-[10px] font-bold uppercase tracking-wider text-slate-500 mb-1">
                            USERNAME ATAU EMAIL
                        </label>
                        <input
                            type="text"
                            id="login"
                            name="login"
                            placeholder="Masukkan username anda"
                            class="w-full rounded-lg border border-slate-200 bg-slate-50/70 px-3 py-2 text-xs text-slate-800 placeholder:text-slate-400 focus:bg-white focus:border-[#0a5a8c] focus:outline-none"
                        >
                    </div>

                    <div>
                        <label for="password" class="block text-[10px] font-bold uppercase tracking-wider text-slate-500 mb-1">
                            KATA SANDI
                        </label>
                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="password123"
                            class="w-full rounded-lg border border-slate-200 bg-slate-50/70 px-3 py-2 text-xs text-slate-800 placeholder:text-slate-400 focus:bg-white focus:border-[#0a5a8c] focus:outline-none"
                        >
                    </div>

                    <div class="flex items-center justify-between text-[11px] text-slate-500 pt-0.5">
                        <label class="inline-flex items-center gap-1.5 cursor-pointer select-none">
                            <input type="checkbox" name="remember" class="rounded border-slate-300">
                            <span>Ingat saya</span>
                        </label>
                        <span class="text-[#0a5a8c] font-medium hover:underline cursor-pointer">Lupa kata sandi?</span>
                    </div>

                    <a href="{{ route('dashboard') }}"
                       class="block w-full text-center bg-[#0a5a8c] hover:bg-[#074770] text-white font-semibold text-xs py-2.5 rounded-lg shadow-sm transition mt-1">
                        Masuk Ke Dashboard →
                    </a>
                </div>

                <div class="mt-5 rounded-xl bg-slate-50 border border-slate-200/80 p-3 text-[10px] text-slate-500 leading-relaxed">
                    <span class="font-bold text-slate-700">Belum punya akun?</span>
                    Hubungi Superadmin untuk dibuatkan akun akses sesuai divisi kerja Anda.
                </div>

                <div class="text-center text-[9px] font-semibold tracking-[0.14em] text-slate-400 uppercase mt-5">
                    © 2026 SPAM IKK KARIMUN
                </div>
            </div>
        </div>

    </div>
</body>
</html>