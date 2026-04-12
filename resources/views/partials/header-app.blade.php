 <!-- Header -->
 <header class="bg-pearl border-b border-sand sticky top-0 z-30">
   <div class="flex items-center justify-between px-4 lg:px-8 py-4">
     <!-- Mobile menu button -->
     <button id="menuBtn" class="lg:hidden p-2 rounded-lg hover:bg-sand transition-colors" onclick="toggleSidebar()">
       <svg class="w-6 h-6 text-navy" fill="none" stroke="currentColor" viewBox="0 0 24 24">
         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
       </svg>
     </button>

     <!-- Page Title -->
     <div class="hidden lg:block">
       <h2 class="text-navy font-semibold text-xl">Dashboard</h2>
       <p class="text-mist text-sm">Selamat datang kembali, {{ Auth::user()->name }}</p>
     </div>

     <!-- Mobile Title -->
     <div class="lg:hidden">
       <h2 class="text-navy font-semibold">Dashboard</h2>
     </div>

     <!-- Profile Dropdown -->
     <div class="relative">
       <button id="profileBtn" class="flex items-center gap-3 p-2 rounded-xl hover:bg-sand transition-colors"
         onclick="toggleDropdown()">
         <div class="text-right hidden sm:block">
           <p class="text-navy font-medium text-sm">{{ Auth::user()->name }}</p>
           <p class="text-mist text-xs">{{ Auth::user()->email }}</p>
         </div>
         <div
           class="w-10 h-10 rounded-full flex items-center justify-center font-bold text-sm"
           style="background: linear-gradient(135deg, #1a6b5e, #228b7a); color: #fdfaf5;">
           {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
         </div>
         <svg class="w-4 h-4 text-mist hidden sm:block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
         </svg>
       </button>

       <!-- Dropdown Menu -->
       <div id="dropdownMenu"
         class="dropdown-menu hidden absolute right-0 top-full mt-2 w-56 bg-pearl rounded-xl shadow-lg border border-sand overflow-hidden">
         <!-- User info at top of dropdown -->
         <div class="px-4 py-3 border-b border-sand">
           <p class="text-navy font-semibold text-sm">{{ Auth::user()->name }}</p>
           <p class="text-mist text-xs truncate">{{ Auth::user()->email }}</p>
         </div>
         <a href="{{ route('account') }}" class="flex items-center gap-3 px-4 py-3 hover:bg-sand transition-colors">
           <svg class="w-5 h-5 text-mist" fill="none" stroke="currentColor" viewBox="0 0 24 24">
             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
               d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
           </svg>
           <span class="text-navy font-medium text-sm">Pengaturan Akun</span>
         </a>
         <div class="border-t border-sand"></div>
         <form action="{{ route('logout') }}" method="POST">
           @csrf
           <button type="submit"
             class="w-full text-left flex items-center gap-3 px-4 py-3 hover:bg-red-50 transition-colors text-red-600">
             <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                 d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
             </svg>
             <span class="font-medium text-sm">Keluar</span>
           </button>
         </form>
       </div>
     </div>
   </div>
 </header>
