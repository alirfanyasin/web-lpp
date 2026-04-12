<!doctype html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login — Sistem Kunjungan Online</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            poppins: ["Poppins", "sans-serif"]
          },
          colors: {
            navy: {
              DEFAULT: "#0b1929",
              light: "#16304d"
            },
            teal: {
              DEFAULT: "#1a6b5e",
              light: "#228b7a"
            },
            amber: {
              DEFAULT: "#c07d20",
              light: "#e09a35"
            },
            sand: "#f5f0e8",
            pearl: "#fdfaf5",
            mist: "#8298af",
          },
        },
      },
    };
  </script>
  <style>
    * {
      font-family: "Poppins", sans-serif;
    }

    /* Background Pattern */
    .login-bg {
      background: linear-gradient(145deg,
          #0b1929 0%,
          #0f2a20 40%,
          #16304d 100%);
    }

    .bg-grid {
      background-image:
        linear-gradient(rgba(255, 255, 255, 0.02) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255, 255, 255, 0.02) 1px, transparent 1px);
      background-size: 50px 50px;
    }

    .glow-1 {
      background: radial-gradient(circle,
          rgba(26, 107, 94, 0.2) 0%,
          transparent 60%);
    }

    .glow-2 {
      background: radial-gradient(circle,
          rgba(192, 125, 32, 0.1) 0%,
          transparent 60%);
    }

    /* Input Focus Animation */
    .input-field {
      transition:
        border-color 0.3s ease,
        box-shadow 0.3s ease,
        background-color 0.3s ease;
    }

    .input-field:focus {
      border-color: #c07d20;
      box-shadow: 0 0 0 3px rgba(192, 125, 32, 0.15);
      background-color: #fdfaf5;
    }

    /* Button Hover */
    .btn-primary {
      background: linear-gradient(135deg, #c07d20, #e09a35);
      transition:
        transform 0.2s ease,
        box-shadow 0.2s ease;
    }

    .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 25px rgba(192, 125, 32, 0.4);
    }

    .btn-primary:active {
      transform: translateY(0);
    }

    /* Password Toggle */
    .password-toggle {
      transition: color 0.2s ease;
    }

    .password-toggle:hover {
      color: #c07d20;
    }

    /* Card Animation */
    .login-card {
      animation: cardFadeIn 0.6s ease-out;
    }

    @keyframes cardFadeIn {
      from {
        opacity: 0;
        transform: translateY(20px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Checkbox */
    .checkbox-custom {
      accent-color: #c07d20;
    }

    /* Link Hover */
    .link-hover {
      transition: color 0.2s ease;
    }

    .link-hover:hover {
      color: #e09a35;
    }

    /* Shake Animation for Error */
    .shake {
      animation: shake 0.5s ease-in-out;
    }

    @keyframes shake {

      0%,
      100% {
        transform: translateX(0);
      }

      20%,
      60% {
        transform: translateX(-8px);
      }

      40%,
      80% {
        transform: translateX(8px);
      }
    }

    /* Error Message */
    .error-msg {
      animation: errorFade 0.3s ease-out;
    }

    @keyframes errorFade {
      from {
        opacity: 0;
        transform: translateY(-5px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Loading Spinner */
    .spinner {
      border: 2px solid rgba(255, 255, 255, 0.3);
      border-top-color: white;
      animation: spin 0.8s linear infinite;
    }

    @keyframes spin {
      to {
        transform: rotate(360deg);
      }
    }
  </style>
</head>

<body class="login-bg min-h-screen flex items-center justify-center p-4 relative overflow-hidden">
  <!-- Background Effects -->
  <div class="bg-grid absolute inset-0 pointer-events-none"></div>
  <div class="glow-1 absolute top-0 right-0 w-[500px] h-[500px] pointer-events-none"></div>
  <div class="glow-2 absolute bottom-0 left-0 w-[400px] h-[400px] pointer-events-none"></div>

  <!-- Login Card -->
  <div class="login-card w-full max-w-md relative z-10">
    <!-- Logo & Header -->
    <div class="text-center mb-8">
      <h1 class="text-2xl font-bold text-white mb-2">Selamat Datang</h1>
      <p class="text-white/50 text-sm">
        Masuk ke akun Anda untuk melanjutkan
      </p>
    </div>

    @if (session('notif'))
      <div
        class="error-msg bg-red-600/20 border border-red-700 text-red-600 rounded-xl px-4 py-3 mb-5 flex items-center gap-3">
        <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <span class="text-sm">{{ session('notif') }}</span>
      </div>
    @endif

    <!-- Form Card -->
    <div class="bg-pearl rounded-2xl shadow-2xl shadow-navy/30 overflow-hidden">
      <!-- Card Header -->
      <div class="px-6 py-4 border-b border-sand" style="background: linear-gradient(135deg, #0b1929, #16304d)">
        <div class="flex items-center gap-3">
          <div class="w-8 h-8 rounded-lg flex items-center justify-center bg-amber/20 text-amber">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
            </svg>
          </div>
          <div>
            <h2 class="text-white font-semibold">Login Akun</h2>
            <p class="text-white/40 text-xs">Masukkan kredensial Anda</p>
          </div>
        </div>
      </div>



      <!-- Form Body -->
      <form action="{{ route('login.post') }}" method="POST" class="p-6">
        @csrf


        <!-- Username/Email Field -->
        <div class="mb-5">
          <label for="username" class="block text-xs font-semibold text-mist mb-2 tracking-wide uppercase">
            Username atau Email
          </label>
          <div class="relative">
            <div class="absolute left-4 top-1/2 -translate-y-1/2 text-mist">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
              </svg>
            </div>
            <input type="text" id="email" name="email" placeholder="Masukkan Alamat Email"
              class="input-field w-full border border-sand rounded-xl pl-12 pr-4 py-3.5 text-sm text-navy bg-sand/50 focus:outline-none"
              autofocus required />
          </div>
        </div>

        <!-- Password Field -->
        <div class="mb-5">
          <label for="password" class="block text-xs font-semibold text-mist mb-2 tracking-wide uppercase">
            Password
          </label>
          <div class="relative">
            <div class="absolute left-4 top-1/2 -translate-y-1/2 text-mist">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
              </svg>
            </div>
            <input type="password" id="password" name="password" placeholder="Masukkan password"
              class="input-field w-full border border-sand rounded-xl pl-12 pr-12 py-3.5 text-sm text-navy bg-sand/50 focus:outline-none"
              required />
            <button type="button" onclick="togglePassword()"
              class="password-toggle absolute right-4 top-1/2 -translate-y-1/2 text-mist focus:outline-none">
              <svg id="eyeOpen" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
              </svg>
              <svg id="eyeClosed" class="w-5 h-5 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
              </svg>
            </button>
          </div>
        </div>

        <!-- Remember & Forgot -->
        <div class="flex items-center justify-between mb-6">
          <label class="flex items-center gap-2 cursor-pointer">
            <input type="checkbox" name="remember" class="checkbox-custom w-4 h-4 rounded" />
            <span class="text-sm text-navy/70">Ingat saya</span>
          </label>
          <a href="#" class="link-hover text-sm text-amber font-medium">Lupa password?</a>
        </div>

        <!-- Submit Button -->
        <button type="submit" id="submitBtn"
          class="btn-primary w-full py-3.5 rounded-xl text-white font-semibold text-sm tracking-wide flex items-center justify-center gap-2">
          <span id="btnText">Masuk</span>
          <div id="btnSpinner" class="spinner w-5 h-5 rounded-full hidden"></div>
        </button>
      </form>

      {{-- <!-- Divider -->
      <div class="px-6">
        <div class="flex items-center gap-4">
          <div class="flex-1 h-px bg-sand"></div>
          <span class="text-xs text-mist">atau</span>
          <div class="flex-1 h-px bg-sand"></div>
        </div>
      </div>

      <!-- Register Link -->
      <div class="p-6 pt-4 text-center">
        <p class="text-sm text-navy/60">
          Belum punya akun?
          <a href="#" class="link-hover text-amber font-semibold">Daftar sekarang</a>
        </p>
      </div> --}}
    </div>

    <!-- Back to Landing -->
    <div class="mt-6 text-center">
      <a href="/"
        class="inline-flex items-center gap-2 text-white/50 hover:text-white text-sm transition-colors">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
        </svg>
        Kembali ke Beranda
      </a>
    </div>

    <!-- Footer -->
    <div class="mt-8 text-center">
      <p class="text-white/30 text-xs">
        © 2025. All rights reserved.
      </p>
    </div>
  </div>

  <!-- Decorative Elements -->
  <div class="absolute bottom-4 right-4 text-white/10 text-xs hidden lg:block">
    v1.0.0
  </div>

  <script>
    // Toggle Password Visibility
    function togglePassword() {
      const passwordInput = document.getElementById("password");
      const eyeOpen = document.getElementById("eyeOpen");
      const eyeClosed = document.getElementById("eyeClosed");

      if (passwordInput.type === "password") {
        passwordInput.type = "text";
        eyeOpen.classList.add("hidden");
        eyeClosed.classList.remove("hidden");
      } else {
        passwordInput.type = "password";
        eyeOpen.classList.remove("hidden");
        eyeClosed.classList.add("hidden");
      }
    }
  </script>
</body>

</html>
