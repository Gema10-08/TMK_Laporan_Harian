<x-app-spam
    title="Operasional Pompa - SPAM IKK Karimun"
    headerTitle="Operasional Pompa"
    activeMenu="pompa"
    breadcrumb='BERANDA &gt; LAPORAN HARIAN &gt; <span class="text-[#0a5a8c] font-bold">OPERASIONAL POMPA</span>'>

    {{-- Tombol & Judul Halaman --}}
    <div class="space-y-3">
        <div>
            <button type="button"
                    onclick="resetFormLaporan()"
                    class="inline-flex items-center gap-1.5 bg-[#0e5c8e] hover:bg-[#094a73] text-white font-semibold text-xs px-4 py-2 rounded-lg shadow-xs transition cursor-pointer">
                <span class="text-sm font-bold leading-none">+</span>
                <span>Buat Laporan Baru</span>
            </button>
        </div>

        <div>
            <h2 class="text-lg font-bold text-[#084a75] tracking-tight">
                Laporan Harian Operasional Pompa Intake dan Distribusi SPAM IKK Karimun Tahun 2026
            </h2>
            <p class="text-xs text-slate-500 mt-0.5">
                Isi data sesuai kondisi lapangan pada setiap shift.
            </p>
        </div>
    </div>

    <form id="formOperasionalPompa" action="#" method="POST" class="space-y-5">
        @csrf

        {{-- SECTION 01: IDENTITAS LAPORAN --}}
        <div class="bg-white rounded-2xl border border-slate-200/80 p-5 shadow-xs space-y-4">
            <div class="flex items-center justify-between border-b border-slate-100 pb-3">
                <div class="flex items-center gap-2.5">
                    <span class="w-6 h-6 rounded-md bg-[#0e5c8e] text-white text-[11px] font-bold flex items-center justify-center">
                        01
                    </span>
                    <h3 class="text-xs font-bold tracking-wider uppercase text-[#084a75]">
                        IDENTITAS LAPORAN
                    </h3>
                </div>

                <span id="badgeStatusSimpan"
                      class="inline-flex items-center gap-1.5 bg-amber-50 border border-amber-200/80 text-amber-700 text-[10px] font-bold px-2.5 py-1 rounded-full tracking-wide">
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span>BELUM DISIMPAN</span>
                </span>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-[10px] font-bold uppercase tracking-wider text-slate-500 mb-1.5">
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
                    <label class="block text-[10px] font-bold uppercase tracking-wider text-slate-500 mb-1.5">
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
        </div>

        {{-- SECTION 02: INPUT DATA OPERASIONAL --}}
        <div class="bg-white rounded-2xl border border-slate-200/80 p-5 shadow-xs space-y-4">
            <div class="flex flex-wrap items-center justify-between gap-2">
                <div class="flex items-center gap-2.5">
                    <span class="w-6 h-6 rounded-md bg-[#0e5c8e] text-white text-[11px] font-bold flex items-center justify-center">
                        02
                    </span>
                    <h3 class="text-xs font-bold tracking-wider uppercase text-[#084a75]">
                        INPUT DATA OPERASIONAL
                    </h3>
                </div>

                <span class="text-[11px] font-medium text-[#0e5c8e] flex items-center gap-1">
                    <span>Geser untuk melihat kolom lainnya</span>
                    <span>&rarr;</span>
                </span>
            </div>

            <div class="overflow-x-auto rounded-xl border border-slate-200/90">
                <table class="min-w-[1380px] w-full border-collapse text-xs">
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
                            <th colspan="3" class="bg-[#c98416] py-2.5 px-3 text-center">
                                BACKWASH
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
                                <td class="py-3 px-2 text-center">
                                    <input type="text"
                                           id="total_{{ $shiftNo }}_backwash"
                                           name="shifts[{{ $shiftNo }}][backwash][total]"
                                           placeholder="..."
                                           readonly
                                           class="w-20 text-center rounded-md border border-slate-200 bg-slate-50 py-1.5 px-2 text-[11px] font-semibold text-slate-500 placeholder:text-slate-300 focus:outline-none">
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        {{-- SECTION 03: CATATAN KENDALA OPERASIONAL --}}
        <div class="bg-white rounded-2xl border border-slate-200/80 p-5 shadow-xs space-y-3.5">
            <div class="flex items-center gap-2.5">
                <span class="w-6 h-6 rounded-md bg-[#0e5c8e] text-white text-[11px] font-bold flex items-center justify-center">
                    03
                </span>
                <h3 class="text-xs font-bold tracking-wider uppercase text-[#084a75]">
                    CATATAN KENDALA OPERASIONAL
                </h3>
            </div>

            <textarea name="catatan_kendala"
                      rows="3"
                      placeholder="Tuliskan kendala operasional jika ada..."
                      class="w-full rounded-xl border border-slate-200 p-3.5 text-xs text-slate-700 placeholder:text-slate-400 focus:border-[#0e5c8e] focus:ring-1 focus:ring-[#0e5c8e] focus:outline-none"></textarea>
        </div>

        {{-- FOOTER ACTION BAR --}}
        <div class="bg-white rounded-2xl border border-slate-200/80 px-5 py-3.5 shadow-xs flex flex-wrap items-center justify-between gap-3">
            <div class="text-[11px] text-slate-400">
                <span class="text-rose-500 font-bold">*</span> Field bertanda wajib diisi
            </div>

            <div class="flex items-center gap-2.5">
                <a href="{{ route('dashboard') }}"
                   class="px-4 py-2 rounded-lg border border-slate-200 bg-white hover:bg-slate-50 text-xs font-semibold text-slate-600 transition">
                    Batal
                </a>
                <button type="submit"
                        onclick="simulasiSimpan(event)"
                        class="inline-flex items-center gap-1.5 px-5 py-2 rounded-lg bg-[#0e5c8e] hover:bg-[#094a73] text-white text-xs font-semibold shadow-xs transition cursor-pointer">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4"/>
                    </svg>
                    <span>Simpan Laporan</span>
                </button>
            </div>
        </div>
    </form>

    @push('scripts')
    <script>
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
                if (pump !== 'backwash') {
                    totalField.className = 'w-12 text-center rounded-md border border-slate-200/80 py-1.5 px-1 text-[11px] font-bold bg-sky-100/80 text-[#084a75] focus:outline-none';
                }
            }
        }

        function resetFormLaporan() {
            document.getElementById('formOperasionalPompa').reset();
            document.querySelectorAll('[id^="total_"]').forEach(el => {
                if (!el.id.endsWith('backwash')) {
                    el.value = '—';
                    el.className = 'w-12 text-center rounded-md border border-slate-200/80 bg-slate-100 py-1.5 px-1 text-[11px] font-bold text-slate-400 focus:outline-none';
                } else {
                    el.value = '';
                }
            });
            document.getElementById('toastSuccess').classList.add('hidden');
        }

        function simulasiSimpan(e) {
            e.preventDefault();
            const toast = document.getElementById('toastSuccess');
            toast.classList.remove('hidden');
            toast.classList.add('flex');

            const badge = document.getElementById('badgeStatusSimpan');
            badge.className = 'inline-flex items-center gap-1.5 bg-emerald-50 border border-emerald-200 text-emerald-700 text-[10px] font-bold px-2.5 py-1 rounded-full tracking-wide';
            badge.innerHTML = '<span>&#10003; TERSIMPAN</span>';
        }
    </script>
    @endpush
</x-app-spam>