<nav id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 py-4 lg:py-5 px-4 lg:px-8">
  <div class="max-w-7xl mx-auto flex items-center justify-between">
    <!-- Logo -->
    <a href="#home" class="flex items-center gap-3 group">
      <div class="w-10 h-10 rounded-xl flex items-center justify-center text-white text-sm"
        style="
              background: linear-gradient(135deg, #c07d20, #e09a35);
              box-shadow: 0 4px 12px rgba(192, 125, 32, 0.4);
            ">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
        </svg>
      </div>
      <div class="leading-tight">
        <div class="text-pearl font-bold text-sm tracking-wider">LAPAS</div>
        <div class="text-amber text-xs font-medium tracking-wider">
          KUNJUNGAN ONLINE
        </div>
      </div>
    </a>

    <!-- Desktop Menu -->
    <div class="hidden lg:flex items-center gap-8">
      <a href="#home" class="nav-link text-white/70 hover:text-white text-sm font-medium transition-colors">Home</a>
      <a href="#tentang" class="nav-link text-white/70 hover:text-white text-sm font-medium transition-colors">Tentang
        Lapas</a>
      <a href="#syarat" class="nav-link text-white/70 hover:text-white text-sm font-medium transition-colors">Syarat &
        Ketentuan</a>
      <a href="#daftar"
        class="px-5 py-2.5 rounded-xl text-white text-sm font-semibold transition-all hover:-translate-y-0.5 hover:shadow-lg"
        style="
              background: linear-gradient(135deg, #c07d20, #e09a35);
              box-shadow: 0 4px 14px rgba(192, 125, 32, 0.35);
            ">
        Daftar Kunjungan
      </a>
    </div>

    <!-- Mobile Menu Button -->
    <button id="menuBtn" class="lg:hidden text-white p-2 rounded-lg hover:bg-white/10 transition-colors">
      <svg class="w-6 h-6 menu-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
      </svg>
      <svg class="w-6 h-6 close-icon hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
      </svg>
    </button>
  </div>

  <!-- Mobile Menu -->
  <div id="mobileMenu" class="lg:hidden hidden flex-col gap-1 mt-4 pt-4 border-t border-white/10">
    <a href="#home"
      class="mobile-link text-white/70 hover:text-white text-sm font-medium py-2 px-3 rounded-lg hover:bg-white/5 transition-all">Home</a>
    <a href="#tentang"
      class="mobile-link text-white/70 hover:text-white text-sm font-medium py-2 px-3 rounded-lg hover:bg-white/5 transition-all">Tentang
      Lapas</a>
    <a href="#syarat"
      class="mobile-link text-white/70 hover:text-white text-sm font-medium py-2 px-3 rounded-lg hover:bg-white/5 transition-all">Syarat
      & Ketentuan</a>
    <a href="#daftar"
      class="mobile-link text-amber font-semibold text-sm py-2 px-3 rounded-lg hover:bg-white/5 transition-all">Daftar
      Kunjungan</a>
  </div>
</nav>
