@php
    $activeMenu = $active ?? '';
@endphp

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
               class="flex items-center gap-2.5 px-3 py-2.5 rounded-lg transition {{ $activeMenu === 'dashboard' ? 'bg-[#1d6391] text-white font-semibold shadow-xs' : 'text-sky-100/85 hover:text-white hover:bg-white/10 font-medium' }}">
                <svg class="w-4 h-4 shrink-0 {{ $activeMenu === 'dashboard' ? 'text-white' : 'text-sky-200/80' }}" fill="currentColor" viewBox="0 0 20 20">
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
                       class="block px-2.5 py-2 rounded-lg transition {{ $activeMenu === 'pompa' ? 'bg-[#1d6391] text-white font-semibold shadow-xs' : 'text-sky-200/80 hover:text-white hover:bg-white/10' }}">
                        Operasional Pompa
                    </a>
                    <a href="#"
                       class="block px-2.5 py-1.5 rounded-md transition {{ $activeMenu === 'larutan' ? 'bg-[#1d6391] text-white font-semibold shadow-xs' : 'text-sky-200/80 hover:text-white hover:bg-white/10' }}">
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