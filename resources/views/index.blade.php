@extends('layouts.guest')
@section('content')
  <!-- HERO SECTION -->
  <section id="home" class="hero-bg relative min-h-screen flex items-center overflow-hidden">
    <!-- Background Effects -->
    <div class="hero-grid absolute inset-0"></div>
    <div class="hero-glow-1 absolute -top-32 -right-32 w-[600px] h-[600px] rounded-full pointer-events-none"></div>
    <div class="hero-glow-2 absolute -bottom-32 -left-32 w-[500px] h-[500px] rounded-full pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 lg:px-8 pt-24 pb-20 lg:pt-32 lg:pb-28 w-full relative z-10">
      <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
        <!-- Left Content -->
        <div class="order-2 lg:order-1">
          <!-- Badge -->
          <div
            class="reveal inline-flex items-center gap-2.5 mb-6 px-4 py-2 rounded-full border border-amber/30 bg-amber/10">
            <span class="w-2 h-2 rounded-full bg-amber pulse-dot"></span>
            <span class="text-amber text-xs font-semibold tracking-widest uppercase">Sistem Kunjungan Digital</span>
          </div>

          <!-- Heading -->
          <h1 class="reveal text-4xl sm:text-5xl lg:text-5xl font-extrabold text-white leading-tight mb-6 tracking-tight"
            style="transition-delay: 0.1s">
            Daftarkan
            <span class="text-amber">Kunjungan</span> Anda Secara Online
          </h1>

          <!-- Description -->
          <p class="reveal text-white/60 text-base lg:text-lg leading-relaxed mb-8 max-w-lg"
            style="transition-delay: 0.15s">
            Platform resmi pendaftaran kunjungan Lembaga Pemasyarakatan.
            Mudah, cepat, dan terverifikasi — tanpa perlu antri panjang.
          </p>

          <!-- CTA Buttons -->
          <div class="reveal flex flex-wrap gap-4 mb-10" style="transition-delay: 0.2s">
            <a href="#daftar"
              class="inline-flex items-center gap-2 px-6 py-3.5 rounded-xl text-white text-sm font-semibold tracking-wide uppercase transition-all hover:-translate-y-1 hover:shadow-xl"
              style="
                  background: linear-gradient(135deg, #c07d20, #e09a35);
                  box-shadow: 0 6px 20px rgba(192, 125, 32, 0.4);
                ">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
              </svg>
              Daftar Sekarang
            </a>
            <a href="#tentang"
              class="inline-flex items-center gap-2 px-6 py-3.5 rounded-xl text-white/75 text-sm font-medium tracking-wide uppercase transition-all hover:text-white hover:bg-white/5 border border-white/20">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              Pelajari Lebih
            </a>
          </div>

          <!-- Stats -->
          <div class="reveal grid grid-cols-2 sm:grid-cols-4 gap-3" style="transition-delay: 0.25s">
            <div class="text-center p-3 rounded-xl bg-white/5 border border-white/10">
              <div class="text-amber text-xl font-extrabold">24/7</div>
              <div class="text-white/40 text-xs font-medium uppercase tracking-wider">
                Online
              </div>
            </div>
            <div class="text-center p-3 rounded-xl bg-white/5 border border-white/10">
              <div class="text-amber text-xl font-extrabold">100%</div>
              <div class="text-white/40 text-xs font-medium uppercase tracking-wider">
                Terverifikasi
              </div>
            </div>
            <div class="text-center p-3 rounded-xl bg-white/5 border border-white/10">
              <div class="text-amber text-xl font-extrabold">&lt;5mnt</div>
              <div class="text-white/40 text-xs font-medium uppercase tracking-wider">
                Proses
              </div>
            </div>
            <div class="text-center p-3 rounded-xl bg-white/5 border border-white/10">
              <div class="text-amber text-xl font-extrabold">Gratis</div>
              <div class="text-white/40 text-xs font-medium uppercase tracking-wider">
                Biaya
              </div>
            </div>
          </div>

          <!-- Alert -->
          <div class="reveal mt-6 flex gap-3 items-start p-4 rounded-xl bg-amber/10 border border-amber/25"
            style="transition-delay: 0.3s">
            <svg class="w-5 h-5 text-amber flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
            </svg>
            <p class="text-sm text-white/70">
              Kunjungan harus didaftarkan minimal
              <strong class="text-amber">2 hari kerja</strong>
              sebelum tanggal kunjungan yang diinginkan.
            </p>
          </div>
        </div>

        <!-- Right Content - Image Grid -->
        <div class="reveal right order-1 lg:order-2 hidden lg:grid grid-cols-2 gap-4" style="transition-delay: 0.2s">
          <div class="img-zoom rounded-2xl overflow-hidden row-span-2 relative min-h-[400px] shadow-2xl">
            <img src="https://cdn.antaranews.com/cache/1200x800/2023/07/12/Lapas-Kelas-IIA-Curup.jpg" alt="Lapas"
              class="w-full h-full object-cover absolute inset-0"
              onerror="
                  this.parentElement.style.background =
                    'linear-gradient(135deg, #16304d, #1a6b5e)';
                  this.remove();
                " />
            <div class="absolute inset-0 bg-gradient-to-t from-navy/70 via-transparent to-transparent"></div>
            <div class="absolute bottom-4 left-4 text-white/80 text-sm font-medium flex items-center gap-2">
              <svg class="w-4 h-4 text-amber" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
              Lapas Indonesia
            </div>
          </div>
          <div class="img-zoom rounded-2xl overflow-hidden relative h-[190px] shadow-xl">
            <img src="https://www.ditjenpas.go.id/uploads/images/image_1680x_68d5ef22472f7.jpg" alt="Kunjungan"
              class="w-full h-full object-cover absolute inset-0"
              onerror="
                  this.parentElement.style.background =
                    'linear-gradient(135deg, #1a6b5e, #0f2e24)';
                  this.remove();
                " />
            <div class="absolute inset-0 bg-gradient-to-t from-navy/60 via-transparent to-transparent"></div>
            <div class="absolute bottom-4 left-4 text-white/80 text-sm font-medium flex items-center gap-2">
              <svg class="w-4 h-4 text-amber" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
              Zona Kunjungan
            </div>
          </div>
          <div class="img-zoom rounded-2xl overflow-hidden relative h-[190px] shadow-xl">
            <img src="https://sumsel.jarrakpos.com/wp-content/uploads/2026/02/IMG-20260203-WA0010-1.jpg" alt="Digital"
              class="w-full h-full object-cover absolute inset-0"
              onerror="
                  this.parentElement.style.background =
                    'linear-gradient(135deg, #c07d20, #16304d)';
                  this.remove();
                " />
            <div class="absolute inset-0 bg-gradient-to-t from-navy/60 via-transparent to-transparent"></div>
            <div class="absolute bottom-4 left-4 text-white/80 text-sm font-medium flex items-center gap-2">
              <svg class="w-4 h-4 text-amber" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>
              Layanan Digital
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Wave Divider -->
    <div class="absolute bottom-0 left-0 right-0 pointer-events-none">
      <svg viewBox="0 0 1440 100" preserveAspectRatio="none" class="w-full h-16 lg:h-24">
        <path d="M0,50 C360,90 1080,10 1440,55 L1440,100 L0,100 Z" fill="#fdfaf5" />
      </svg>
    </div>
  </section>

  <!-- TENTANG LAPAS -->
  <section id="tentang" class="py-20 lg:py-28 px-4 lg:px-8 bg-pearl">
    <div class="max-w-7xl mx-auto">
      <!-- Section Header -->
      <div class="reveal text-center mb-16">
        <span
          class="inline-block text-xs font-semibold tracking-widest uppercase px-4 py-2 rounded-full bg-amber/10 text-amber border border-amber/20 mb-4">Tentang
          Kami</span>
        <h2 class="text-3xl lg:text-4xl font-bold text-navy mb-3">
          Tentang Lapas
        </h2>
        <div class="w-12 h-1 rounded mx-auto" style="background: linear-gradient(90deg, #c07d20, #e09a35)"></div>
      </div>

      <!-- Profile -->
      <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center mb-20">
        <!-- Images -->
        <div class="reveal left relative h-[400px] lg:h-[450px]">
          <div class="img-zoom absolute top-0 left-0 w-4/5 h-72 rounded-2xl overflow-hidden shadow-xl">
            <img src="https://cdn.antaranews.com/cache/1200x800/2023/07/12/Lapas-Kelas-IIA-Curup.jpg" alt="Lapas"
              class="w-full h-full object-cover"
              onerror="
                  this.parentElement.style.background =
                    'linear-gradient(135deg, #16304d, #1a6b5e)';
                  this.remove();
                " />
          </div>
          <div
            class="img-zoom absolute bottom-0 right-0 w-3/5 h-52 rounded-2xl overflow-hidden shadow-xl border-4 border-pearl">
            <img src="https://cdn.antaranews.com/cache/1200x800/2023/09/19/Lapas-Kelas-IIA-Curup-2.jpg" alt="Area"
              class="w-full h-full object-cover"
              onerror="
                  this.parentElement.style.background =
                    'linear-gradient(135deg, #c07d20, #0b1929)';
                  this.remove();
                " />
          </div>
          <div
            class="absolute top-6 right-6 px-4 py-2 rounded-lg text-white text-xs font-bold uppercase tracking-wider shadow-lg"
            style="background: linear-gradient(135deg, #c07d20, #e09a35)">
            Lapas Kelas I
          </div>
        </div>

        <!-- Text -->
        <div class="reveal right">
          <span
            class="inline-block text-xs font-semibold tracking-widest uppercase px-4 py-2 rounded-full bg-amber/10 text-amber border border-amber/20 mb-4">Profil
            Lembaga</span>
          <h3 class="text-2xl lg:text-3xl font-bold text-navy mb-4 leading-snug">
            Lembaga Pemasyarakatan Kelas I Surabaya
          </h3>
          <p class="text-mist text-sm lg:text-base leading-relaxed mb-4">
            Lembaga Pemasyarakatan Kelas I Surabaya merupakan Unit Pelaksana
            Teknis (UPT) di bawah Direktorat Jenderal Pemasyarakatan,
            Kementerian Hukum dan Hak Asasi Manusia Republik Indonesia.
          </p>
          <p class="text-mist text-sm lg:text-base leading-relaxed mb-8">
            Kami berkomitmen memberikan pelayanan kunjungan yang manusiawi,
            tertib, dan transparan kepada keluarga serta kerabat Warga Binaan
            Pemasyarakatan (WBP).
          </p>

          <!-- Features -->
          <div class="grid grid-cols-2 gap-3">
            <div class="flex items-center gap-3 bg-sand rounded-xl px-4 py-3 card-hover">
              <div class="w-9 h-9 rounded-lg flex items-center justify-center text-white"
                style="background: linear-gradient(135deg, #c07d20, #e09a35)">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                </svg>
              </div>
              <span class="text-sm font-medium text-navy">Terpercaya & Resmi</span>
            </div>
            <div class="flex items-center gap-3 bg-sand rounded-xl px-4 py-3 card-hover">
              <div class="w-9 h-9 rounded-lg flex items-center justify-center text-white"
                style="background: linear-gradient(135deg, #c07d20, #e09a35)">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
              </div>
              <span class="text-sm font-medium text-navy">Tepat Waktu</span>
            </div>
            <div class="flex items-center gap-3 bg-sand rounded-xl px-4 py-3 card-hover">
              <div class="w-9 h-9 rounded-lg flex items-center justify-center text-white"
                style="background: linear-gradient(135deg, #c07d20, #e09a35)">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                </svg>
              </div>
              <span class="text-sm font-medium text-navy">Pelayanan Humanis</span>
            </div>
            <div class="flex items-center gap-3 bg-sand rounded-xl px-4 py-3 card-hover">
              <div class="w-9 h-9 rounded-lg flex items-center justify-center text-white"
                style="background: linear-gradient(135deg, #c07d20, #e09a35)">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
              </div>
              <span class="text-sm font-medium text-navy">Layanan Digital</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Jadwal Kunjungan -->
      <div class="reveal text-center mb-10">
        <h3 class="text-2xl font-bold text-navy">Jadwal & Jam Kunjungan</h3>
      </div>
      <div class="grid md:grid-cols-3 gap-6">
        <!-- Senin-Kamis -->
        <div class="reveal scale card-hover bg-white rounded-2xl p-8 text-center border-t-4 border-amber"
          style="transition-delay: 0.1s">
          <div class="w-14 h-14 mx-auto mb-5 rounded-xl flex items-center justify-center text-xl bg-amber/10 text-amber">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
            </svg>
          </div>
          <h4 class="font-bold text-lg text-navy mb-2">Senin – Kamis</h4>
          <p class="text-3xl font-extrabold text-amber mb-1">09.00 – 12.00</p>
          <p class="text-xs text-mist font-medium uppercase tracking-wider">
            Kunjungan Pagi
          </p>
        </div>

        <!-- Jumat -->
        <div class="reveal scale card-hover bg-white rounded-2xl p-8 text-center border-t-4 border-amber"
          style="transition-delay: 0.2s">
          <div class="w-14 h-14 mx-auto mb-5 rounded-xl flex items-center justify-center text-xl bg-amber/10 text-amber">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
          </div>
          <h4 class="font-bold text-lg text-navy mb-2">Jumat</h4>
          <p class="text-3xl font-extrabold text-amber mb-1">09.00 – 11.00</p>
          <p class="text-xs text-mist font-medium uppercase tracking-wider">
            Jadwal Khusus
          </p>
        </div>

        <!-- Sabtu-Minggu -->
        <div class="reveal scale card-hover bg-white rounded-2xl p-8 text-center border-t-4 border-red-400"
          style="transition-delay: 0.3s">
          <div class="w-14 h-14 mx-auto mb-5 rounded-xl flex items-center justify-center text-xl bg-red-50 text-red-400">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
            </svg>
          </div>
          <h4 class="font-bold text-lg text-navy mb-2">Sabtu & Minggu</h4>
          <p class="text-3xl font-extrabold text-red-400 mb-1">Tutup</p>
          <p class="text-xs text-mist font-medium uppercase tracking-wider">
            Hari Libur
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- SYARAT & KETENTUAN -->
  <section id="syarat" class="py-20 lg:py-28 px-4 lg:px-8 bg-sand">
    <div class="max-w-7xl mx-auto">
      <!-- Section Header -->
      <div class="reveal text-center mb-16">
        <span
          class="inline-block text-xs font-semibold tracking-widest uppercase px-4 py-2 rounded-full bg-amber/10 text-amber border border-amber/20 mb-4">Informasi
          Penting</span>
        <h2 class="text-3xl lg:text-4xl font-bold text-navy mb-3">
          Syarat & Ketentuan
        </h2>
        <div class="w-12 h-1 rounded mx-auto mb-4" style="background: linear-gradient(90deg, #c07d20, #e09a35)"></div>
        <p class="text-mist text-sm max-w-lg mx-auto">
          Pastikan Anda memenuhi semua persyaratan di bawah ini sebelum
          mendaftarkan kunjungan.
        </p>
      </div>

      <!-- Syarat & Larangan -->
      <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 mb-20">
        <!-- Syarat -->
        <div class="reveal left">
          <h3 class="flex items-center gap-3 text-lg font-bold text-navy mb-6">
            <div class="w-10 h-10 rounded-xl flex items-center justify-center text-white"
              style="background: linear-gradient(135deg, #1a6b5e, #228b7a)">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
              </svg>
            </div>
            Syarat Pengunjung
          </h3>
          <div class="space-y-3">
            <div class="flex gap-4 items-start bg-white rounded-xl p-4 shadow-sm card-hover">
              <div class="w-6 h-6 rounded-full flex items-center justify-center text-white text-xs flex-shrink-0 mt-0.5"
                style="background: linear-gradient(135deg, #1a6b5e, #228b7a)">
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                </svg>
              </div>
              <p class="text-sm text-navy/80 leading-relaxed">
                Membawa
                <strong class="text-navy">KTP/SIM/Paspor</strong>
                yang masih berlaku (asli dan fotokopi).
              </p>
            </div>
            <div class="flex gap-4 items-start bg-white rounded-xl p-4 shadow-sm card-hover">
              <div class="w-6 h-6 rounded-full flex items-center justify-center text-white text-xs flex-shrink-0 mt-0.5"
                style="background: linear-gradient(135deg, #1a6b5e, #228b7a)">
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                </svg>
              </div>
              <p class="text-sm text-navy/80 leading-relaxed">
                Memiliki hubungan keluarga atau relasi yang dapat dibuktikan
                secara dokumen.
              </p>
            </div>
            <div class="flex gap-4 items-start bg-white rounded-xl p-4 shadow-sm card-hover">
              <div class="w-6 h-6 rounded-full flex items-center justify-center text-white text-xs flex-shrink-0 mt-0.5"
                style="background: linear-gradient(135deg, #1a6b5e, #228b7a)">
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                </svg>
              </div>
              <p class="text-sm text-navy/80 leading-relaxed">
                Berusia minimal
                <strong class="text-navy">17 tahun</strong>; anak di bawah
                umur harus didampingi orang tua/wali.
              </p>
            </div>
            <div class="flex gap-4 items-start bg-white rounded-xl p-4 shadow-sm card-hover">
              <div class="w-6 h-6 rounded-full flex items-center justify-center text-white text-xs flex-shrink-0 mt-0.5"
                style="background: linear-gradient(135deg, #1a6b5e, #228b7a)">
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                </svg>
              </div>
              <p class="text-sm text-navy/80 leading-relaxed">
                Berpakaian sopan dan rapi — tidak memakai kaos tanpa lengan,
                celana pendek, atau pakaian ketat.
              </p>
            </div>
            <div class="flex gap-4 items-start bg-white rounded-xl p-4 shadow-sm card-hover">
              <div class="w-6 h-6 rounded-full flex items-center justify-center text-white text-xs flex-shrink-0 mt-0.5"
                style="background: linear-gradient(135deg, #1a6b5e, #228b7a)">
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                </svg>
              </div>
              <p class="text-sm text-navy/80 leading-relaxed">
                Maksimal
                <strong class="text-navy">2 orang pengunjung</strong>
                per sesi kunjungan untuk 1 WBP.
              </p>
            </div>
          </div>
        </div>

        <!-- Larangan -->
        <div class="reveal right">
          <h3 class="flex items-center gap-3 text-lg font-bold text-navy mb-6">
            <div class="w-10 h-10 rounded-xl flex items-center justify-center text-white bg-red-400">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
              </svg>
            </div>
            Larangan Kunjungan
          </h3>
          <div class="space-y-3">
            <div class="flex gap-4 items-start bg-white rounded-xl p-4 shadow-sm border-l-4 border-red-300 card-hover">
              <div
                class="w-6 h-6 rounded-full flex items-center justify-center text-white text-xs flex-shrink-0 mt-0.5 bg-red-400">
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </div>
              <p class="text-sm text-navy/80 leading-relaxed">
                Dilarang membawa
                <strong class="text-navy">narkotika, senjata</strong>, benda
                tajam, atau barang terlarang lainnya.
              </p>
            </div>
            <div class="flex gap-4 items-start bg-white rounded-xl p-4 shadow-sm border-l-4 border-red-300 card-hover">
              <div
                class="w-6 h-6 rounded-full flex items-center justify-center text-white text-xs flex-shrink-0 mt-0.5 bg-red-400">
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </div>
              <p class="text-sm text-navy/80 leading-relaxed">
                Dilarang membawa
                <strong class="text-navy">handphone</strong>
                ke area dalam lapas.
              </p>
            </div>
            <div class="flex gap-4 items-start bg-white rounded-xl p-4 shadow-sm border-l-4 border-red-300 card-hover">
              <div
                class="w-6 h-6 rounded-full flex items-center justify-center text-white text-xs flex-shrink-0 mt-0.5 bg-red-400">
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </div>
              <p class="text-sm text-navy/80 leading-relaxed">
                Dilarang membawa makanan/minuman yang tidak melewati
                pemeriksaan petugas.
              </p>
            </div>
            <div class="flex gap-4 items-start bg-white rounded-xl p-4 shadow-sm border-l-4 border-red-300 card-hover">
              <div
                class="w-6 h-6 rounded-full flex items-center justify-center text-white text-xs flex-shrink-0 mt-0.5 bg-red-400">
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </div>
              <p class="text-sm text-navy/80 leading-relaxed">
                Dilarang memberikan
                <strong class="text-navy">uang tunai</strong>
                secara langsung kepada WBP.
              </p>
            </div>
            <div class="flex gap-4 items-start bg-white rounded-xl p-4 shadow-sm border-l-4 border-red-300 card-hover">
              <div
                class="w-6 h-6 rounded-full flex items-center justify-center text-white text-xs flex-shrink-0 mt-0.5 bg-red-400">
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </div>
              <p class="text-sm text-navy/80 leading-relaxed">
                Kunjungan akan dibatalkan jika pendaftar tidak hadir tepat
                waktu sesuai jadwal.
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Alur Pendaftaran -->
      <div class="reveal text-center mb-10">
        <h3 class="text-2xl font-bold text-navy">
          Alur Pendaftaran Kunjungan
        </h3>
      </div>
      <div class="relative">
        <!-- Step Line -->
        <div class="hidden lg:block absolute top-6 left-[16%] right-[16%] h-0.5 step-line"></div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8">
          <!-- Step 1 -->
          <div class="reveal scale text-center relative" style="transition-delay: 0.1s">
            <div
              class="w-12 h-12 mx-auto mb-4 rounded-xl flex items-center justify-center text-white font-bold text-lg shadow-lg"
              style="background: linear-gradient(135deg, #c07d20, #e09a35)">
              1
            </div>
            <h4 class="font-semibold text-navy mb-2">Isi Formulir</h4>
            <p class="text-xs text-mist leading-relaxed">
              Lengkapi data pengunjung dan WBP yang akan dikunjungi.
            </p>
          </div>

          <!-- Step 2 -->
          <div class="reveal scale text-center relative" style="transition-delay: 0.2s">
            <div
              class="w-12 h-12 mx-auto mb-4 rounded-xl flex items-center justify-center text-white font-bold text-lg shadow-lg"
              style="background: linear-gradient(135deg, #c07d20, #e09a35)">
              2
            </div>
            <h4 class="font-semibold text-navy mb-2">Upload Dokumen</h4>
            <p class="text-xs text-mist leading-relaxed">
              Unggah KTP dan dokumen pendukung lainnya.
            </p>
          </div>

          <!-- Step 3 -->
          <div class="reveal scale text-center relative" style="transition-delay: 0.3s">
            <div
              class="w-12 h-12 mx-auto mb-4 rounded-xl flex items-center justify-center text-white font-bold text-lg shadow-lg"
              style="background: linear-gradient(135deg, #c07d20, #e09a35)">
              3
            </div>
            <h4 class="font-semibold text-navy mb-2">Verifikasi</h4>
            <p class="text-xs text-mist leading-relaxed">
              Petugas memverifikasi data dalam 1–2 hari kerja.
            </p>
          </div>

          <!-- Step 4 -->
          <div class="reveal scale text-center relative" style="transition-delay: 0.4s">
            <div
              class="w-12 h-12 mx-auto mb-4 rounded-xl flex items-center justify-center text-white font-bold text-lg shadow-lg"
              style="background: linear-gradient(135deg, #c07d20, #e09a35)">
              4
            </div>
            <h4 class="font-semibold text-navy mb-2">Konfirmasi & Hadir</h4>
            <p class="text-xs text-mist leading-relaxed">
              Verfikasi dan hadir sesuai jadwal yang ditentukan.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FORM PENDAFTARAN -->
  <section id="daftar" class="py-20 lg:py-28 px-4 lg:px-8 bg-pearl">



    <div class="max-w-3xl mx-auto">
      <!-- Section Header -->
      <div class="reveal text-center mb-12">
        <span
          class="inline-block text-xs font-semibold tracking-widest uppercase px-4 py-2 rounded-full bg-amber/10 text-amber border border-amber/20 mb-4">Pendaftaran</span>
        <h2 class="text-3xl lg:text-4xl font-bold text-navy mb-3">
          Daftar Kunjungan
        </h2>
        <div class="w-12 h-1 rounded mx-auto mb-4" style="background: linear-gradient(90deg, #c07d20, #e09a35)"></div>
        <p class="text-mist text-sm">
          Isi formulir di bawah ini dengan data yang benar dan lengkap.
        </p>
      </div>

      @if (session('success'))
        <div class="bg-green-50 px-5 py-4 rounded mb-6 border flex items-start gap-3">
          <div class="w-6 h-6 rounded-full flex items-center justify-center text-white text-xs flex-shrink-0 mt-0.5"
            style="background: linear-gradient(135deg, #1a6b5e, #228b7a)">
            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
            </svg>
          </div>
          <p class="text-green-700">{{ session('success') }}</p>
        </div>
      @endif

      <!-- Form Card -->
      <div class="reveal bg-white rounded-2xl overflow-hidden shadow-xl shadow-navy/5">
        <!-- Card Header -->
        <div class="flex items-center gap-4 px-6 lg:px-8 py-5"
          style="background: linear-gradient(135deg, #0b1929, #16304d)">
          <div class="w-10 h-10 rounded-xl flex items-center justify-center bg-amber/20 text-amber">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
            </svg>
          </div>
          <div>
            <h3 class="text-white font-bold text-lg">
              Formulir Pendaftaran Kunjungan
            </h3>
            <p class="text-xs text-white/40 mt-0.5">
              Semua kolom bertanda * wajib diisi
            </p>
          </div>
        </div>
        <form action="{{ route('visiting.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="p-6 lg:p-8">
            <!-- Section A: Data Pengunjung -->
            <div class="flex items-center gap-3 mb-5">
              <div class="w-7 h-7 rounded-lg flex items-center justify-center text-white text-xs font-bold"
                style="background: linear-gradient(135deg, #c07d20, #e09a35)">
                1
              </div>
              <h4 class="font-semibold text-navy">Data Pengunjung</h4>
            </div>

            <div class="grid sm:grid-cols-2 gap-4 mb-8">
              <div>
                <label class="block text-xs font-semibold text-mist mb-1.5 tracking-wide">Nama Lengkap * <small
                    class="italic">(sesuai
                    KTP)</small></label>
                <input type="text" placeholder="Masukkan nama lengkap" name="name" required
                  class="w-full border border-sand rounded-xl px-4 py-3 text-sm text-navy bg-pearl focus:outline-none focus:border-amber focus:ring-2 focus:ring-amber/20 transition-all" />
                @error('name')
                  <small class="text-red-500">{{ $message }}</small>
                @enderror
              </div>
              <div>
                <label class="block text-xs font-semibold text-mist mb-1.5 tracking-wide">NIK / No. KTP *</label>
                <input type="number" placeholder="16 digit NIK" maxlength="16" name="nik" required
                  class="w-full border border-sand rounded-xl px-4 py-3 text-sm text-navy bg-pearl focus:outline-none focus:border-amber focus:ring-2 focus:ring-amber/20 transition-all" />
                @error('nik')
                  <small class="text-red-500">{{ $message }}</small>
                @enderror
              </div>
              <div>
                <label class="block text-xs font-semibold text-mist mb-1.5 tracking-wide">Nomor Telepon *</label>
                <input type="tel" placeholder="08xxxxxxxxxx" name="phone" required
                  class="w-full border border-sand rounded-xl px-4 py-3 text-sm text-navy bg-pearl focus:outline-none focus:border-amber focus:ring-2 focus:ring-amber/20 transition-all" />
                @error('phone')
                  <small class="text-red-500">{{ $message }}</small>
                @enderror
              </div>
              <div>
                <label class="block text-xs font-semibold text-mist mb-1.5 tracking-wide">Email</label>
                <input type="email" placeholder="email@contoh.com" name="email" required
                  class="w-full border border-sand rounded-xl px-4 py-3 text-sm text-navy bg-pearl focus:outline-none focus:border-amber focus:ring-2 focus:ring-amber/20 transition-all" />
                @error('email')
                  <small class="text-red-500">{{ $message }}</small>
                @enderror
              </div>
              <div class="sm:col-span-2">
                <label class="block text-xs font-semibold text-mist mb-1.5 tracking-wide">Alamat Lengkap *</label>
                <textarea rows="2" placeholder="Jl. Nama Jalan, No, RT/RW, Kelurahan, Kecamatan, Kota" name="address" required
                  class="w-full border border-sand rounded-xl px-4 py-3 text-sm text-navy bg-pearl focus:outline-none focus:border-amber focus:ring-2 focus:ring-amber/20 transition-all resize-none"></textarea>
                @error('address')
                  <small class="text-red-500">{{ $message }}</small>
                @enderror
              </div>
            </div>

            <!-- Divider -->
            <div class="h-px mb-8"
              style="
                background: linear-gradient(
                  90deg,
                  transparent,
                  #e09a35,
                  transparent
                );
              ">
            </div>

            <!-- Section B: Data WBP -->
            <div class="flex items-center gap-3 mb-5">
              <div class="w-7 h-7 rounded-lg flex items-center justify-center text-white text-xs font-bold"
                style="background: linear-gradient(135deg, #c07d20, #e09a35)">
                2
              </div>
              <h4 class="font-semibold text-navy">Data Warga Binaan (WBP)</h4>
            </div>

            <div class="grid sm:grid-cols-2 gap-4 mb-8">
              <div>
                <label class="block text-xs font-semibold text-mist mb-1.5 tracking-wide">Nama WBP *</label>
                <input type="text" placeholder="Nama lengkap WBP" name="wbp_name" required
                  class="w-full border border-sand rounded-xl px-4 py-3 text-sm text-navy bg-pearl focus:outline-none focus:border-amber focus:ring-2 focus:ring-amber/20 transition-all" />
                @error('wbp_name')
                  <small class="text-red-500">{{ $message }}</small>
                @enderror
              </div>
              <div>
                <label class="block text-xs font-semibold text-mist mb-1.5 tracking-wide">No. Register WBP *</label>
                <input type="text" placeholder="Contoh: LP-2024-0001" name="wbp_registration_number" required
                  class="w-full border border-sand rounded-xl px-4 py-3 text-sm text-navy bg-pearl focus:outline-none focus:border-amber focus:ring-2 focus:ring-amber/20 transition-all" />
                @error('wbp_registration_number')
                  <small class="text-red-500">{{ $message }}</small>
                @enderror
              </div>
              <div>
                <label class="block text-xs font-semibold text-mist mb-1.5 tracking-wide">Hubungan dengan WBP *</label>
                <select name="relationship" required
                  class="w-full border border-sand rounded-xl px-4 py-3 text-sm text-navy bg-pearl focus:outline-none focus:border-amber focus:ring-2 focus:ring-amber/20 transition-all cursor-pointer">
                  <option value="">-- Pilih Hubungan --</option>
                  <option value="Suami / Istri">Suami / Istri</option>
                  <option value="Orang Tua">Orang Tua</option>
                  <option value="Anak">Anak</option>
                  <option value="Saudara Kandung">Saudara Kandung</option>
                  <option value="Paman / Bibi">Paman / Bibi</option>
                  <option value="Teman / Rekan">Teman / Rekan</option>
                  <option value="Pengacara / Kuasa Hukum">Pengacara / Kuasa Hukum</option>
                  <option value="Lainnya">Lainnya</option>
                </select>
                @error('relationship')
                  <small class="text-red-500">{{ $message }}</small>
                @enderror
              </div>
              <div>
                <label class="block text-xs font-semibold text-mist mb-1.5 tracking-wide">Jumlah Pengunjung *</label>
                <select name="number_of_visitor" required
                  class="w-full border border-sand rounded-xl px-4 py-3 text-sm text-navy bg-pearl focus:outline-none focus:border-amber focus:ring-2 focus:ring-amber/20 transition-all cursor-pointer">
                  <option value="">-- Pilih Jumlah --</option>
                  <option value="1">1 Orang</option>
                  <option value="2">2 Orang</option>
                </select>
                @error('number_of_visitor')
                  <small class="text-red-500">{{ $message }}</small>
                @enderror
              </div>
            </div>

            <!-- Divider -->
            <div class="h-px mb-8"
              style="
                background: linear-gradient(
                  90deg,
                  transparent,
                  #e09a35,
                  transparent
                );
              ">
            </div>

            <!-- Section C: Jadwal -->
            <div class="flex items-center gap-3 mb-5">
              <div class="w-7 h-7 rounded-lg flex items-center justify-center text-white text-xs font-bold"
                style="background: linear-gradient(135deg, #c07d20, #e09a35)">
                3
              </div>
              <h4 class="font-semibold text-navy">Jadwal Kunjungan</h4>
            </div>

            <div class="grid sm:grid-cols-2 gap-4 mb-6">
              <div>
                <label class="block text-xs font-semibold text-mist mb-1.5 tracking-wide">Tanggal Kunjungan *</label>
                <input type="date" name="visit_date" required
                  class="w-full border border-sand rounded-xl px-4 py-3 text-sm text-navy bg-pearl focus:outline-none focus:border-amber focus:ring-2 focus:ring-amber/20 transition-all" />
                @error('visit_date')
                  <small class="text-red-500">{{ $message }}</small>
                @enderror
              </div>
              <div>
                <label class="block text-xs font-semibold text-mist mb-1.5 tracking-wide">Sesi Kunjungan *</label>
                <select name="visit_session" required
                  class="w-full border border-sand rounded-xl px-4 py-3 text-sm text-navy bg-pearl focus:outline-none focus:border-amber focus:ring-2 focus:ring-amber/20 transition-all cursor-pointer">
                  <option value="">-- Pilih Sesi --</option>
                  <option value="Pagi (09.00 - 10.30)">Pagi (09.00 - 10.30)</option>
                  <option value="Siang (10.30 - 12.00)">Siang (10.30 - 12.00)</option>
                </select>
                @error('visit_session')
                  <small class="text-red-500">{{ $message }}</small>
                @enderror
              </div>
              <div class="sm:col-span-2">
                <label class="block text-xs font-semibold text-mist mb-1.5 tracking-wide">Upload KTP (JPG/PNG/PDF, maks.
                  2MB) *</label>
                <div id="uploadZone" class="upload-zone rounded-xl p-8 text-center cursor-pointer">
                  <svg id="uploadIcon" class="w-10 h-10 mx-auto text-mist mb-3 transition-colors" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                      d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                  </svg>
                  <p id="uploadText" class="text-sm text-mist mb-1">
                    Klik untuk memilih file atau seret ke sini
                  </p>
                  <small class="text-xs text-mist/60">KTP Pengunjung (wajib) — JPG, PNG, atau PDF. Maks. 2MB</small>
                  <input type="file" name="ktp_file" id="fileInput" accept=".jpg,.jpeg,.png,.pdf" required
                    class="hidden" />
                </div>
                @error('ktp_file')
                  <small class="text-red-500">{{ $message }}</small>
                @enderror
              </div>
            </div>

            <!-- Consent -->
            <div class="flex gap-3 items-start bg-sand rounded-xl p-4 mb-6 border border-sand">
              <input type="checkbox" name="is_agree" id="consent" required
                class="mt-1 w-4 h-4 flex-shrink-0 cursor-pointer accent-amber" />
              <label for="consent" class="text-sm text-navy/70 leading-relaxed cursor-pointer">
                Saya menyatakan bahwa semua data yang diisikan adalah benar, dan
                saya menyetujui
                <strong class="text-navy">syarat & ketentuan kunjungan</strong>
                yang berlaku di Lembaga Pemasyarakatan ini.
              </label>
            </div>

            <!-- Submit Button -->
            <button type="submit"
              class="w-full py-4 rounded-xl text-white text-sm font-semibold tracking-wide uppercase flex items-center justify-center gap-2 transition-all hover:-translate-y-1 hover:shadow-xl"
              style="
                background: linear-gradient(135deg, #c07d20, #e09a35);
                box-shadow: 0 6px 20px rgba(192, 125, 32, 0.35);
              ">
              Kirim Permohonan Kunjungan
            </button>

            <p class="text-center text-xs text-mist mt-4 flex items-center justify-center gap-1">
              <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
              </svg>
              Data Anda aman dan hanya digunakan untuk keperluan verifikasi
              kunjungan.
            </p>
          </div>
        </form>
      </div>
    </div>
  </section>

  <!-- CONTACT BAR -->
  <section class="py-16 px-4 lg:px-8" style="background: linear-gradient(135deg, #0b1929 0%, #0f2a20 100%)">
    <div class="max-w-4xl mx-auto grid sm:grid-cols-3 gap-8 text-center">
      <div class="reveal scale" style="transition-delay: 0.1s">
        <div class="w-12 h-12 mx-auto mb-4 rounded-xl flex items-center justify-center bg-amber/20 text-amber">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
          </svg>
        </div>
        <h4 class="text-white font-semibold mb-1">Telepon</h4>
        <p class="text-sm text-white/50">(031) 123-4567</p>
      </div>
      <div class="reveal scale" style="transition-delay: 0.2s">
        <div class="w-12 h-12 mx-auto mb-4 rounded-xl flex items-center justify-center bg-amber/20 text-amber">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
          </svg>
        </div>
        <h4 class="text-white font-semibold mb-1">Email</h4>
        <p class="text-sm text-white/50">info@lapassurabaya.go.id</p>
      </div>
      <div class="reveal scale" style="transition-delay: 0.3s">
        <div class="w-12 h-12 mx-auto mb-4 rounded-xl flex items-center justify-center bg-amber/20 text-amber">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
          </svg>
        </div>
        <h4 class="text-white font-semibold mb-1">Alamat</h4>
        <p class="text-sm text-white/50">Jl. Pemasyarakatan No.1, Surabaya</p>
      </div>
    </div>
  </section>
@endsection
