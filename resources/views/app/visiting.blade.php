@extends('layouts.app')

@section('title', 'Daftar Kunjungan - LAPAS')

@section('content')
  <div class="mb-6 lg:mb-8 flex flex-col md:flex-row md:items-center justify-between gap-4">
    <div>
      <h1 class="text-2xl font-bold text-navy">Manajemen Kunjungan</h1>
      <p class="text-mist">Kelola dan pantau data kunjungan warga binaan</p>
    </div>
  </div>

  @if (session('success'))
    <div class="mb-6 p-4 bg-teal/10 border border-teal/20 text-teal rounded-xl flex items-center gap-3 animate-fade-in">
      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
      </svg>
      <p class="text-sm font-medium">{{ session('success') }}</p>
    </div>
  @endif

  <div class="bg-pearl rounded-2xl border border-sand p-5 lg:p-6 shadow-sm overflow-hidden">
    <!-- Search & Filter Area -->
    <div class="mb-6">
      <div class="relative max-w-md w-full">
        <input type="text" id="searchInput" placeholder="Cari nama pengunjung atau warga binaan..."
          class="w-full bg-sand/50 border border-sand rounded-xl px-4 py-3 pl-11 text-navy focus:ring-2 focus:ring-teal/20 focus:border-teal transition-all outline-none text-sm placeholder:text-mist">
        <div class="absolute left-4 top-1/2 mt-2 -translate-y-1/2 text-mist">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
          </svg>
        </div>
      </div>
    </div>

    <!-- Table Container -->
    <div class="overflow-x-auto">
      <table class="w-full text-left border-collapse">
        <thead>
          <tr class="border-b border-sand">
            <th class="py-4 px-4 text-xs font-semibold text-mist uppercase tracking-wider">Nama Pengunjung</th>
            <th class="py-4 px-4 text-xs font-semibold text-mist uppercase tracking-wider">Jam Kunjungan</th>
            <th class="py-4 px-4 text-xs font-semibold text-mist uppercase tracking-wider">Mengunjungi Siapa</th>
            <th class="py-4 px-4 text-xs font-semibold text-mist uppercase tracking-wider">Tanggal</th>
            <th class="py-4 px-4 text-xs font-semibold text-mist uppercase tracking-wider">Status</th>
            <th class="py-4 px-4 text-xs font-semibold text-mist uppercase tracking-wider text-right">Aksi</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-sand" id="visitorTableBody">
          @forelse ($visitings as $visit)
            <tr class="hover:bg-sand/20 transition-colors group">
              <td class="py-4 px-4">
                <div class="flex items-center gap-3">
                  <div
                    class="w-8 h-8 rounded-full bg-navy/10 flex items-center justify-center text-navy font-semibold text-xs">
                    {{ strtoupper(substr($visit->name, 0, 2)) }}
                  </div>
                  <span class="text-sm font-medium text-navy">{{ $visit->name }}</span>
                </div>
              </td>
              <td class="py-4 px-4">
                <div class="flex items-center gap-2 text-sm text-mist">
                  <svg class="w-4 h-4 text-teal/60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                  {{ $visit->visit_session }}
                </div>
              </td>
              <td class="py-4 px-4">
                <span class="text-sm text-navy">{{ $visit->wbp_name }}</span>
              </td>
              <td class="py-4 px-4 text-sm text-mist">
                {{ \Carbon\Carbon::parse($visit->visit_date)->format('d M Y') }}
              </td>
              <td class="py-4 px-4">
                @if($visit->approve)
                  <span class="inline-flex items-center gap-1 px-2 py-1 rounded-full bg-teal/10 text-teal text-[10px] font-bold uppercase tracking-wider">
                    <span class="w-1 h-1 rounded-full bg-teal animate-pulse"></span>
                    Disetujui
                  </span>
                @else
                  <span class="inline-flex items-center gap-1 px-2 py-1 rounded-full bg-amber/10 text-amber text-[10px] font-bold uppercase tracking-wider">
                    Menunggu
                  </span>
                @endif
              </td>
              <td class="py-4 px-4">
                <div class="flex items-center justify-end gap-1">
                  <a href="{{ route('visiting.show', $visit->id) }}"
                    class="p-2 text-mist hover:text-teal hover:bg-teal/10 rounded-lg transition-all" title="Lihat">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                  </a>

                  <form action="{{ route('visiting.approve', $visit->id) }}" method="POST" class="inline">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="p-2 {{ $visit->approve ? 'text-teal' : 'text-mist' }} hover:text-teal hover:bg-teal/10 rounded-lg transition-all"
                      title="{{ $visit->approve ? 'Batalkan Persetujuan' : 'Setujui' }}">
                      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                      </svg>
                    </button>
                  </form>
                  <form action="{{ route('visiting.destroy', $visit->id) }}" method="POST"
                    onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                      class="p-2 text-mist hover:text-amber hover:bg-amber/10 rounded-lg transition-all" title="Hapus">
                      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                      </svg>
                    </button>
                  </form>
                </div>
              </td>
            </tr>
          @empty
            <tr id="emptyRow">
              <td colspan="5" class="py-12 text-center">
                <div class="flex flex-col items-center justify-center">
                  <div class="w-16 h-16 bg-sand rounded-full flex items-center justify-center mb-4">
                    <svg class="w-8 h-8 text-mist" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9.172 9.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                  </div>
                  <h3 class="text-navy font-semibold">Belum ada data kunjungan</h3>
                  <p class="text-mist text-sm">Data kunjungan yang masuk akan tampil di sini</p>
                </div>
              </td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>

    <!-- Empty State (hidden by default) -->
    <div id="emptyState" class="hidden py-12 flex flex-col items-center justify-center text-center">
      <div class="w-16 h-16 bg-sand rounded-full flex items-center justify-center mb-4">
        <svg class="w-8 h-8 text-mist" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M9.172 9.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
      </div>
      <h3 class="text-navy font-semibold">Tidak ada hasil</h3>
      <p class="text-mist text-sm">Coba kata kunci lain atau filter berbeda</p>
    </div>

    <!-- Pagination -->
    <div class="mt-8 pt-6 border-t border-sand">
      {{ $visitings->links() }}
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const searchInput = document.getElementById('searchInput');
      const tableBody = document.getElementById('visitorTableBody');
      const rows = tableBody.getElementsByTagName('tr');
      const emptyState = document.getElementById('emptyState');

      searchInput.addEventListener('input', function() {
        const searchTerm = this.value.toLowerCase();
        let visibleCount = 0;

        for (let i = 0; i < rows.length; i++) {
          const rowText = rows[i].textContent.toLowerCase();
          if (rowText.includes(searchTerm)) {
            rows[i].style.display = '';
            visibleCount++;
          } else {
            rows[i].style.display = 'none';
          }
        }

        if (visibleCount === 0) {
          tableBody.classList.add('hidden');
          emptyState.classList.remove('hidden');
        } else {
          tableBody.classList.remove('hidden');
          emptyState.classList.add('hidden');
        }
      });
    });
  </script>
@endsection
