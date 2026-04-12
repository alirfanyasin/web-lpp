<!-- Mobile Overlay -->
<div id="overlay" class="overlay fixed inset-0 bg-navy/50 z-40 lg:hidden hidden" onclick="toggleSidebar()"></div>

<!-- Sidebar -->
<aside id="sidebar" class="sidebar fixed top-0 left-0 h-full w-64 bg-navy z-50 lg:translate-x-0 -translate-x-full">
  <!-- Logo -->
  <div class="flex items-center gap-3 px-6 py-5 border-b border-navy-light">
    <div class="w-10 h-10 bg-teal rounded-lg flex items-center justify-center">
      <svg class="w-6 h-6 text-pearl" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
      </svg>
    </div>
    <div>
      <h1 class="text-pearl font-semibold text-lg">LAPAS</h1>
      <p class="text-mist text-xs">Sistem Kunjungan</p>
    </div>
  </div>

  <!-- Navigation -->
  <nav class="mt-6 px-3">
    <p class="text-mist/60 text-xs font-medium px-3 mb-3 uppercase tracking-wider">
      Menu Utama
    </p>

    <a href="{{ route('dashboard') }}"
      class="menu-item flex items-center gap-3 px-4 py-3 rounded-lg transition-colors mb-1 {{ request()->routeIs('dashboard') ? 'active text-pearl bg-navy-light/50' : 'text-mist hover:bg-navy-light/50 hover:text-pearl' }}"
      data-menu="dashboard">
      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
      </svg>
      <span class="font-medium">Dashboard</span>
    </a>

    <a href="{{ route('visiting.index') }}"
      class="menu-item flex items-center gap-3 px-4 py-3 rounded-lg transition-colors mb-1 {{ request()->routeIs('visiting.*') ? 'active text-pearl bg-navy-light/50' : 'text-mist hover:bg-navy-light/50 hover:text-pearl' }}"
      data-menu="kunjungan">
      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
      </svg>
      <span class="font-medium">Kunjungan</span>
    </a>
  </nav>

  <!-- Bottom info -->
  <div class="absolute bottom-0 left-0 right-0 p-4 border-t border-navy-light">
    <div class="bg-navy-light/50 rounded-lg p-3">
      <p class="text-mist text-xs mb-1">Hak Akses</p>
      <p class="text-pearl font-medium text-sm">Administrator</p>
    </div>
  </div>
</aside>
