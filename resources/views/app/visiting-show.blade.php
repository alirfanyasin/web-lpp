@extends('layouts.app')

@section('title', 'Detail Kunjungan - LAPAS')

@section('content')
  <div class="mb-6 lg:mb-8">
    <div class="flex items-center gap-2 text-sm text-mist mb-2">
      <a href="{{ route('visiting.index') }}" class="hover:text-teal transition-colors">Manajemen Kunjungan</a>
      <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
      </svg>
      <span>Detail Kunjungan</span>
    </div>
    <h1 class="text-2xl font-bold text-navy">Detail Data Kunjungan</h1>
  </div>

  <div class="grid grid-cols-1 xl:grid-cols-3 gap-6">
    <!-- Left Column: Primary Info -->
    <div class="xl:col-span-2 space-y-6">
      <div class="bg-pearl rounded-2xl border border-sand p-6 lg:p-8 shadow-sm">
        <div class="flex items-center gap-4 mb-8">
          <div class="w-16 h-16 rounded-2xl bg-teal/10 flex items-center justify-center text-teal text-2xl font-bold">
            {{ strtoupper(substr($visiting->name, 0, 2)) }}
          </div>
          <div>
            <h2 class="text-xl font-bold text-navy">{{ $visiting->name }}</h2>
            <p class="text-mist">ID Registrasi: #{{ str_pad($visiting->id, 5, '0', STR_PAD_LEFT) }}</p>
          </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
          <!-- Visitor Info -->
          <div>
            <h3 class="text-sm font-semibold text-mist uppercase tracking-wider mb-4">Informasi Pengunjung</h3>
            <div class="space-y-4">
              <div>
                <p class="text-xs text-mist mb-1">NIK</p>
                <p class="text-navy font-medium">{{ $visiting->nik }}</p>
              </div>
              <div>
                <p class="text-xs text-mist mb-1">Nomor Telepon</p>
                <p class="text-navy font-medium">{{ $visiting->phone }}</p>
              </div>
              <div>
                <p class="text-xs text-mist mb-1">Email</p>
                <p class="text-navy font-medium">{{ $visiting->email }}</p>
              </div>
              <div>
                <p class="text-xs text-mist mb-1">Alamat</p>
                <p class="text-navy font-medium">{{ $visiting->address }}</p>
              </div>
            </div>
          </div>

          <!-- WBP Info -->
          <div>
            <h3 class="text-sm font-semibold text-mist uppercase tracking-wider mb-4">Warga Binaan (WBP)</h3>
            <div class="space-y-4">
              <div>
                <p class="text-xs text-mist mb-1">Nama WBP</p>
                <p class="text-navy font-medium">{{ $visiting->wbp_name }}</p>
              </div>
              <div>
                <p class="text-xs text-mist mb-1">Nomor Registrasi WBP</p>
                <p class="text-navy font-medium">{{ $visiting->wbp_registration_number }}</p>
              </div>
              <div>
                <p class="text-xs text-mist mb-1">Hubungan Keluarga</p>
                <p class="text-navy font-medium">{{ $visiting->relationship }}</p>
              </div>
              <div>
                <p class="text-xs text-mist mb-1">Jumlah Pengunjung</p>
                <p class="text-navy font-medium">{{ $visiting->number_of_visitor }} Orang</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- KTP Display -->
      <div class="bg-pearl rounded-2xl border border-sand p-6 shadow-sm">
        <h3 class="text-sm font-semibold text-mist uppercase tracking-wider mb-4">Lampiran KTP</h3>
        @if (Str::endsWith($visiting->ktp_file, '.pdf'))
          <iframe src="{{ asset('storage/' . $visiting->ktp_file) }}"
            class="w-full h-96 rounded-xl border border-sand"></iframe>
        @else
          <img src="{{ asset('storage/' . $visiting->ktp_file) }}" alt="KTP {{ $visiting->name }}"
            class="w-full rounded-xl border border-sand">
        @endif
      </div>
    </div>

    <!-- Right Column: Schedule & Actions -->
    <div class="space-y-6">
      <div class="bg-pearl rounded-2xl border border-sand p-6 shadow-sm">
        <h3 class="text-sm font-semibold text-mist uppercase tracking-wider mb-6">Jadwal Kunjungan</h3>
        <div class="space-y-6">
          <div class="flex items-start gap-4">
            <div class="w-10 h-10 rounded-xl bg-navy/5 flex items-center justify-center text-navy flex-shrink-0">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
              </svg>
            </div>
            <div>
              <p class="text-xs text-mist mb-0.5">Tanggal Kunjungan</p>
              <p class="text-navy font-bold">{{ \Carbon\Carbon::parse($visiting->visit_date)->format('l, d F Y') }}</p>
            </div>
          </div>

          <div class="flex items-start gap-4">
            <div class="w-10 h-10 rounded-xl bg-navy/5 flex items-center justify-center text-navy flex-shrink-0">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </div>
            <div>
              <p class="text-xs text-mist mb-0.5">Sesi / Jam Kunjungan</p>
              <p class="text-navy font-bold">{{ $visiting->visit_session }}</p>
            </div>
          </div>
        </div>

        <div class="mt-8 pt-6 border-t border-sand space-y-3">
          <form action="{{ route('visiting.approve', $visiting->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <button type="submit"
              class="w-full {{ $visiting->approve ? 'bg-amber text-pearl hover:bg-amber-light' : 'bg-teal hover:bg-teal-light text-pearl' }} font-semibold py-3 rounded-xl transition-all shadow-lg">
              {{ $visiting->approve ? 'Batalkan Persetujuan' : 'Setujui Kunjungan' }}
            </button>
          </form>
          <form action="{{ route('visiting.destroy', $visiting->id) }}" method="POST"
            onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
            @csrf
            @method('DELETE')
            <button type="submit"
              class="w-full bg-sand text-amber hover:bg-amber/10 font-semibold py-3 rounded-xl transition-all">
              Hapus Data
            </button>
          </form>
        </div>
      </div>

      <!-- Agreement Note -->
      <div class="bg-amber/5 border border-amber/10 rounded-2xl p-6">
        <div class="flex items-center gap-2 text-amber font-semibold mb-2 text-sm">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          Status Persetujuan
        </div>
        <p class="text-xs text-amber font-bold mb-1">
          STATUS: {{ $visiting->approve ? 'DISETUJUI' : 'MENUNGGU KONFIRMASI' }}
        </p>
        <p class="text-xs text-amber/80 leading-relaxed">
          Pengunjung telah menyetujui syarat dan ketentuan yang berlaku di LAPAS pada tanggal pengajuan.
        </p>
      </div>
    </div>
  </div>
@endsection
