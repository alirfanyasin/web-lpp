@extends('layouts.app')

@section('title', 'Pengaturan Akun - LAPAS')

@section('content')
  <div class="mb-6 lg:mb-8">
    <h1 class="text-2xl font-bold text-navy">Pengaturan Akun</h1>
    <p class="text-mist">Kelola informasi dan keamanan akun Anda</p>
  </div>

  @if (session('success'))
    <div class="mb-6 p-4 bg-teal/10 border border-teal/20 text-teal rounded-xl flex items-center gap-3">
      <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
      </svg>
      <p class="text-sm font-medium">{{ session('success') }}</p>
    </div>
  @endif

  <div class="grid grid-cols-1 xl:grid-cols-3 gap-6">

    <!-- Left: Avatar Card -->
    <div class="xl:col-span-1">
      <div class="bg-pearl rounded-2xl border border-sand p-6 shadow-sm text-center">
        <div class="w-24 h-24 rounded-full mx-auto mb-4 flex items-center justify-center text-4xl font-bold"
          style="background: linear-gradient(135deg, #1a6b5e, #228b7a); color: #fdfaf5;">
          {{ strtoupper(substr($user->name, 0, 1)) }}
        </div>
        <h2 class="text-navy font-bold text-lg">{{ $user->name }}</h2>
        <p class="text-mist text-sm">{{ $user->email }}</p>
        <div class="mt-4 pt-4 border-t border-sand">
          <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-teal/10 text-teal">
            <span class="w-1.5 h-1.5 rounded-full bg-teal"></span>
            Administrator
          </span>
        </div>
      </div>
    </div>

    <!-- Right: Edit Forms -->
    <div class="xl:col-span-2 space-y-6">

      <!-- Profile Info -->
      <div class="bg-pearl rounded-2xl border border-sand p-6 shadow-sm">
        <h3 class="text-navy font-semibold text-lg mb-6">Informasi Profil</h3>
        <form action="{{ route('account.update') }}" method="POST">
          @csrf
          @method('PUT')
          <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
            <div>
              <label class="block text-xs font-semibold text-mist uppercase tracking-wider mb-2">Nama Lengkap</label>
              <input type="text" name="name" value="{{ old('name', $user->name) }}"
                class="w-full bg-sand/50 border border-sand rounded-xl px-4 py-3 text-navy text-sm focus:outline-none focus:border-teal focus:ring-2 focus:ring-teal/20 transition-all
                @error('name') border-red-400 @enderror">
              @error('name')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
              @enderror
            </div>
            <div>
              <label class="block text-xs font-semibold text-mist uppercase tracking-wider mb-2">Email</label>
              <input type="email" name="email" value="{{ old('email', $user->email) }}"
                class="w-full bg-sand/50 border border-sand rounded-xl px-4 py-3 text-navy text-sm focus:outline-none focus:border-teal focus:ring-2 focus:ring-teal/20 transition-all
                @error('email') border-red-400 @enderror">
              @error('email')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
              @enderror
            </div>
          </div>
          <div class="mt-6 flex justify-end">
            <button type="submit"
              class="px-6 py-2.5 rounded-xl text-sm font-semibold text-pearl transition-all shadow-lg"
              style="background: #1a6b5e;">
              Simpan Perubahan
            </button>
          </div>
        </form>
      </div>

      <!-- Change Password -->
      <div class="bg-pearl rounded-2xl border border-sand p-6 shadow-sm">
        <h3 class="text-navy font-semibold text-lg mb-1">Ubah Password</h3>
        <p class="text-mist text-sm mb-6">Gunakan password yang kuat dan unik untuk keamanan akun.</p>
        <form action="{{ route('account.password') }}" method="POST">
          @csrf
          @method('PUT')
          <div class="space-y-5">
            <div>
              <label class="block text-xs font-semibold text-mist uppercase tracking-wider mb-2">Password Saat Ini</label>
              <input type="password" name="current_password"
                class="w-full bg-sand/50 border border-sand rounded-xl px-4 py-3 text-navy text-sm focus:outline-none focus:border-teal focus:ring-2 focus:ring-teal/20 transition-all
                @error('current_password') border-red-400 @enderror"
                placeholder="Masukkan password lama">
              @error('current_password')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
              @enderror
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
              <div>
                <label class="block text-xs font-semibold text-mist uppercase tracking-wider mb-2">Password Baru</label>
                <input type="password" name="password"
                  class="w-full bg-sand/50 border border-sand rounded-xl px-4 py-3 text-navy text-sm focus:outline-none focus:border-teal focus:ring-2 focus:ring-teal/20 transition-all
                  @error('password') border-red-400 @enderror"
                  placeholder="Min. 8 karakter">
                @error('password')
                  <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
              </div>
              <div>
                <label class="block text-xs font-semibold text-mist uppercase tracking-wider mb-2">Konfirmasi Password</label>
                <input type="password" name="password_confirmation"
                  class="w-full bg-sand/50 border border-sand rounded-xl px-4 py-3 text-navy text-sm focus:outline-none focus:border-teal focus:ring-2 focus:ring-teal/20 transition-all"
                  placeholder="Ulangi password baru">
              </div>
            </div>
          </div>
          <div class="mt-6 flex justify-end">
            <button type="submit"
              class="px-6 py-2.5 rounded-xl text-sm font-semibold transition-all"
              style="background: rgba(192,125,32,0.1); color: #c07d20;">
              Ubah Password
            </button>
          </div>
        </form>
      </div>

    </div>
  </div>
@endsection
