
  <!-- Header Navigation -->
    <header class="sticky top-0 z-50 bg-white border-b border-slate-100/80 shadow-xs transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="/" class="flex items-center gap-2 group">
                        <span class="text-2xl font-bold tracking-tight text-blue-600 hover:text-blue-700 transition-colors">
                            Xe Ghép Pro
                        </span>
                    </a>
                </div>

                <!-- Desktop Navigation Menu -->
                <nav class="hidden md:flex items-center gap-8">
                    <a href="#" class="text-blue-600 font-bold border-b-2 border-blue-600 pb-1 text-sm tracking-wide transition-all">Tìm chuyến xe</a>
                    <a href="#" class="text-slate-600 hover:text-blue-600 font-semibold transition-colors pb-1 text-sm tracking-wide">Chuyến đi của tôi</a>
                    <a href="#" class="text-slate-600 hover:text-blue-600 font-semibold transition-colors pb-1 text-sm tracking-wide">Hỗ trợ</a>
                    <a href="#" class="text-slate-600 hover:text-blue-600 font-semibold transition-colors pb-1 text-sm tracking-wide">Trở thành đối tác</a>
                </nav>

                <!-- Header Actions (Notification & User Profile) -->
                <div class="flex items-center gap-4">
                    <!-- Notification Bell -->
                    <button class="relative p-2 text-slate-400 hover:text-blue-600 hover:bg-slate-50 rounded-full transition-all cursor-pointer">
                        <span class="absolute top-1.5 right-1.5 w-1.5 h-1.5 bg-red-500 rounded-full ring-1 ring-white animate-pulse"></span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                        </svg>
                    </button>

                    <!-- Profile Button -->
                    <button class="flex items-center gap-2.5 px-3 py-1.5 border border-slate-200 rounded-2xl hover:border-blue-600 hover:bg-blue-50/20 transition-all duration-300 shadow-xs bg-white cursor-pointer group">
                        <!-- Avatar -->
                        <img class="w-8 h-8 rounded-full object-cover ring-2 ring-slate-100" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="User Avatar">
                        <div class="hidden sm:flex flex-col text-left leading-tight">
                            <span class="text-xs font-bold text-slate-700 group-hover:text-blue-600 transition-colors">Tài khoản</span>
                            <span class="text-[10px] text-slate-500 group-hover:text-blue-500 transition-colors">của tôi</span>
                        </div>
                        <svg class="w-3.5 h-3.5 text-slate-400 group-hover:text-blue-600 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>

                    <!-- Mobile Menu Button -->
                    <button class="md:hidden p-2 text-slate-500 hover:text-blue-600 hover:bg-slate-50 rounded-lg transition-colors cursor-pointer" id="mobile-menu-btn">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation Menu -->
        <div class="hidden md:hidden bg-white border-b border-slate-100 px-4 pt-2 pb-4 space-y-2 shadow-inner" id="mobile-menu">
            <a href="#" class="block px-3 py-2 rounded-lg text-base font-semibold text-blue-600 bg-blue-50">Tìm chuyến xe</a>
            <a href="#" class="block px-3 py-2 rounded-lg text-base font-medium text-slate-600 hover:text-blue-600 hover:bg-slate-50 transition-colors">Chuyến đi của tôi</a>
            <a href="#" class="block px-3 py-2 rounded-lg text-base font-medium text-slate-600 hover:text-blue-600 hover:bg-slate-50 transition-colors">Hỗ trợ</a>
            <a href="#" class="block px-3 py-2 rounded-lg text-base font-medium text-slate-600 hover:text-blue-600 hover:bg-slate-50 transition-colors">Trở thành đối tác</a>
        </div>
        </div>
    </header>