@extends('user.layouts.partials.app')

@section('title', 'Tìm Chuyến Xe - Xe Ghép Pro')

@section('content')
<main class="flex-grow bg-slate-50 py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Top Search Bar Summary -->
        <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-4 mb-8">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-6">
                <!-- Location query -->
                <div class="flex items-center gap-4 flex-wrap">
                    <div class="flex items-center gap-2">
                        <span class="w-8 h-8 rounded-full bg-blue-50 text-blue-500 flex items-center justify-center">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </span>
                        <div>
                            <span class="text-xs text-slate-400 block font-medium">Điểm đón</span>
                            <span class="text-sm font-bold text-slate-700">Hà Nội</span>
                        </div>
                    </div>

                    <div class="text-slate-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </div>

                    <div class="flex items-center gap-2">
                        <span class="w-8 h-8 rounded-full bg-orange-50 text-orange-500 flex items-center justify-center">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </span>
                        <div>
                            <span class="text-xs text-slate-400 block font-medium">Điểm trả</span>
                            <span class="text-sm font-bold text-slate-700">Hải Phòng</span>
                        </div>
                    </div>
                </div>

                <!-- Date & Passengers summary -->
                <div class="flex items-center gap-8 flex-wrap lg:justify-end w-full lg:w-auto">
                    <div class="border-l border-slate-100 pl-6 hidden sm:block">
                        <span class="text-xs text-slate-400 block font-medium">NGÀY ĐI</span>
                        <span class="text-sm font-extrabold text-slate-800">Thứ 4, 25 Th10</span>
                    </div>

                    <div class="border-l border-slate-100 pl-6 hidden sm:block">
                        <span class="text-xs text-slate-400 block font-medium">HÀNH KHÁCH</span>
                        <span class="text-sm font-extrabold text-slate-800">1 Người</span>
                    </div>

                    <a href="/" class="bg-blue-600 hover:bg-blue-700 active:bg-blue-800 text-white font-semibold text-xs tracking-wider uppercase py-3.5 px-6 rounded-xl transition-all shadow-sm hover:shadow-blue-500/10 cursor-pointer">
                        Thay đổi
                    </a>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            
            <!-- Left Column: Filters -->
            <div class="lg:col-span-3 space-y-6">
                <div class="bg-white rounded-3xl border border-slate-100/80 p-6 shadow-xs">
                    <!-- Filter Header -->
                    <div class="flex items-center justify-between pb-4 border-b border-slate-100 mb-6">
                        <h2 class="text-base font-bold text-slate-800">Bộ lọc</h2>
                        <button type="button" class="text-xs font-semibold text-blue-600 hover:text-blue-700 transition-colors cursor-pointer">Xoá tất cả</button>
                    </div>

                    <!-- Price Filter -->
                    <div class="mb-8">
                        <h3 class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-4">Khoảng giá</h3>
                        <div class="px-2">
                            <input type="range" min="100" max="1000" value="500" class="w-full h-1 bg-slate-200 rounded-lg appearance-none cursor-pointer accent-blue-600 focus:outline-none">
                            <div class="flex items-center justify-between text-xs font-bold text-slate-500 mt-3">
                                <span>100k</span>
                                <span>1.000k</span>
                            </div>
                        </div>
                    </div>

                    <!-- Vehicle Type Filter -->
                    <div class="mb-8">
                        <h3 class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-3">Loại xe</h3>
                        <div class="space-y-3">
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input type="checkbox" class="w-[18px] h-[18px] rounded text-blue-600 border-slate-300 focus:ring-blue-500/20 cursor-pointer">
                                <span class="text-sm font-semibold text-slate-600 group-hover:text-slate-900 transition-colors">Xe 4 chỗ (Sedan)</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input type="checkbox" class="w-[18px] h-[18px] rounded text-blue-600 border-slate-300 focus:ring-blue-500/20 cursor-pointer">
                                <span class="text-sm font-semibold text-slate-600 group-hover:text-slate-900 transition-colors">Xe 7 chỗ (SUV)</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input type="checkbox" class="w-[18px] h-[18px] rounded text-blue-600 border-slate-300 focus:ring-blue-500/20 cursor-pointer">
                                <span class="text-sm font-semibold text-slate-600 group-hover:text-slate-900 transition-colors">Limousine cao cấp</span>
                            </label>
                        </div>
                    </div>

                    <!-- Departure Time Filter -->
                    <div class="mb-8">
                        <h3 class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-3">Giờ khởi hành</h3>
                        <div class="grid grid-cols-1 gap-2">
                            <button type="button" class="border border-slate-200 hover:border-blue-600 hover:bg-blue-50/20 text-slate-600 hover:text-blue-600 rounded-xl py-2 px-3 text-xs font-bold transition-all text-left flex justify-between items-center cursor-pointer">
                                <span>Sáng (00-12h)</span>
                            </button>
                            <button type="button" class="border border-slate-200 hover:border-blue-600 hover:bg-blue-50/20 text-slate-600 hover:text-blue-600 rounded-xl py-2 px-3 text-xs font-bold transition-all text-left flex justify-between items-center cursor-pointer">
                                <span>Chiều (12-18h)</span>
                            </button>
                            <button type="button" class="border border-slate-200 hover:border-blue-600 hover:bg-blue-50/20 text-slate-600 hover:text-blue-600 rounded-xl py-2 px-3 text-xs font-bold transition-all text-left flex justify-between items-center cursor-pointer">
                                <span>Tối (18-24h)</span>
                            </button>
                        </div>
                    </div>

                    <!-- Operator Filter -->
                    <div>
                        <h3 class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-3">Nhà xe</h3>
                        <div class="space-y-3">
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input type="checkbox" class="w-[18px] h-[18px] rounded text-blue-600 border-slate-300 focus:ring-blue-500/20 cursor-pointer">
                                <span class="text-sm font-semibold text-slate-600 group-hover:text-slate-900 transition-colors">Hải Âu Transport</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input type="checkbox" class="w-[18px] h-[18px] rounded text-blue-600 border-slate-300 focus:ring-blue-500/20 cursor-pointer">
                                <span class="text-sm font-semibold text-slate-600 group-hover:text-slate-900 transition-colors">Hoàng Long Pro</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input type="checkbox" class="w-[18px] h-[18px] rounded text-blue-600 border-slate-300 focus:ring-blue-500/20 cursor-pointer">
                                <span class="text-sm font-semibold text-slate-600 group-hover:text-slate-900 transition-colors">Xe Ghép 88</span>
                            </label>
                        </div>
                    </div>

                </div>

                <!-- Promo Banner -->
                <div class="relative bg-gradient-to-r from-blue-700 to-indigo-900 rounded-3xl overflow-hidden shadow-sm border border-slate-100/50 p-6 text-white h-[200px] flex flex-col justify-between group cursor-pointer">
                    <!-- Background image overlay -->
                    <div class="absolute inset-0 z-0">
                        <img src="/images/promo_van.png" alt="Limousine minivan promotion" class="w-full h-full object-cover object-center opacity-30 transform group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent"></div>
                    </div>
                    
                    <div class="relative z-10">
                        <span class="inline-block bg-white/20 text-white font-bold text-[9px] uppercase tracking-widest px-2 py-0.5 rounded mb-2">Ưu đãi</span>
                        <h4 class="text-lg font-black leading-snug drop-shadow-md">Giảm 20k</h4>
                        <p class="text-slate-200 text-xs font-light mt-1">Cho chuyến đi đầu tiên của bạn</p>
                    </div>

                    <span class="relative z-10 text-[10px] font-bold text-blue-300 group-hover:text-white transition-colors flex items-center gap-1 mt-auto">
                        Nhận ưu đãi ngay 
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </span>
                </div>
            </div>

            <!-- Right Column: Search Results List -->
            <div class="lg:col-span-9 space-y-6">

                <!-- Results Header & Sorting -->
                <div class="flex items-center justify-between pb-2">
                    <div>
                        <span class="text-sm font-bold text-slate-800"><span class="text-blue-600">24</span> chuyến xe khả dụng</span>
                    </div>
                    
                    <!-- Sorting Dropdown -->
                    <div class="flex items-center gap-2">
                        <span class="text-xs text-slate-400 font-medium">SẮP XẾP:</span>
                        <div class="relative inline-block text-left">
                            <button type="button" class="inline-flex justify-center items-center gap-1.5 text-xs font-bold text-blue-600 hover:text-blue-700 transition-colors focus:outline-none cursor-pointer" id="sort-menu-button">
                                <span>Giờ khởi hành sớm nhất</span>
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Trip Card 1: Hải Âu Transport -->
                <div class="bg-white rounded-3xl border border-slate-100 hover:border-blue-500/10 shadow-xs hover:shadow-lg transition-all duration-300 overflow-hidden flex flex-col md:flex-row">
                    <!-- Vehicle Image -->
                    <div class="w-full md:w-64 h-48 md:h-auto shrink-0 relative overflow-hidden bg-slate-900">
                        <img src="/images/luxury_limousine.png" alt="Hai Au Transport Limousine" class="w-full h-full object-cover object-center">
                        <span class="absolute top-4 left-4 bg-emerald-500/90 text-white font-bold text-[9px] tracking-wider uppercase px-2.5 py-1 rounded-lg backdrop-blur-xs flex items-center gap-1 shadow-sm">
                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6.267 3.455a.75.75 0 00-.708.522L4.547 7.25h10.906l-1.012-3.273a.75.75 0 00-.708-.522H6.267zm9.645 5.295a1.5 1.5 0 011.088 1.43v5.57a1.5 1.5 0 01-1.5 1.5h-11a1.5 1.5 0 01-1.5-1.5v-5.57a1.5 1.5 0 011.088-1.43l1.047-3.393A2.25 2.25 0 016.267 2h7.466a2.25 2.25 0 012.125 1.547l1.054 3.408zM5.75 11a.75.75 0 100 1.5.75.75 0 000-1.5zm8.5 0a.75.75 0 100 1.5.75.75 0 000-1.5z" clip-rule="evenodd"></path>
                            </svg>
                            Verified Driver
                        </span>
                    </div>

                    <!-- Card Body -->
                    <div class="p-6 md:p-8 flex-grow flex flex-col justify-between">
                        <div>
                            <!-- Header Info -->
                            <div class="flex items-start justify-between flex-wrap gap-2 mb-2">
                                <div>
                                    <div class="flex items-center gap-2">
                                        <h3 class="text-base font-bold text-slate-800">Hải Âu Transport</h3>
                                        <span class="inline-flex items-center gap-0.5 px-1.5 py-0.5 rounded-md text-[10px] font-bold bg-amber-50 text-amber-600 border border-amber-100">
                                            ★ 4.8
                                        </span>
                                    </div>
                                    <span class="text-xs text-slate-400 font-bold tracking-wider uppercase block mt-0.5">Limousine 9 chỗ</span>
                                </div>
                            </div>

                            <!-- Route Time & Timeline Graphic -->
                            <div class="flex items-center gap-6 my-6">
                                <!-- Departure -->
                                <div class="text-left">
                                    <span class="text-lg font-black text-slate-800">08:00</span>
                                    <span class="text-xs text-slate-400 block font-medium mt-0.5">Bến xe Mỹ Đình</span>
                                </div>

                                <!-- Timeline line -->
                                <div class="flex-grow flex flex-col items-center relative">
                                    <span class="text-[10px] font-bold text-slate-400 bg-slate-50 border border-slate-100 px-2 py-0.5 rounded-full absolute -top-3">2h 15m</span>
                                    <div class="w-full h-0.5 bg-slate-200 flex items-center justify-between">
                                        <div class="w-2 h-2 rounded-full bg-blue-600 ring-4 ring-blue-100"></div>
                                        <div class="w-2 h-2 rounded-full bg-blue-600 ring-4 ring-blue-100"></div>
                                    </div>
                                </div>

                                <!-- Destination -->
                                <div class="text-left md:text-right">
                                    <span class="text-lg font-black text-slate-800">10:15</span>
                                    <span class="text-xs text-slate-400 block font-medium mt-0.5">Văn phòng Hải Phòng</span>
                                </div>
                            </div>
                        </div>

                        <!-- Amenities & Action -->
                        <div class="flex items-center justify-between border-t border-slate-100 pt-4 flex-wrap gap-4 mt-auto">
                            <!-- Amenity Icons -->
                            <div class="flex items-center gap-3">
                                <span class="inline-flex items-center gap-1.5 text-xs text-slate-500 font-medium">
                                    <span class="w-6 h-6 rounded-full bg-slate-50 flex items-center justify-center text-slate-400">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071a9 9 0 0112.728 0M1.22 9.607a14 14 0 0119.56 0"></path></svg>
                                    </span>
                                    Wifi
                                </span>
                                <span class="inline-flex items-center gap-1.5 text-xs text-slate-500 font-medium">
                                    <span class="w-6 h-6 rounded-full bg-slate-50 flex items-center justify-center text-slate-400">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                                    </span>
                                    Sạc
                                </span>
                                <span class="inline-flex items-center gap-1.5 text-xs text-slate-500 font-medium">
                                    <span class="w-6 h-6 rounded-full bg-slate-50 flex items-center justify-center text-slate-400">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 9.172V5L8 4z"></path></svg>
                                    </span>
                                    Nước
                                </span>
                            </div>

                            <!-- Price and Action -->
                            <div class="flex items-center gap-6">
                                <div class="text-right">
                                    <span class="text-xl font-black text-blue-600 block leading-tight">250.000đ</span>
                                    <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wide">Còn 3 ghế trống</span>
                                </div>
                                <button type="button" class="bg-blue-600 hover:bg-blue-700 active:bg-blue-800 text-white font-bold text-xs py-3 px-5 rounded-2xl transition-all shadow-sm hover:shadow-blue-500/10 cursor-pointer">
                                    Chọn ghế
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Trip Card 2: Hoàng Long Pro -->
                <div class="bg-white rounded-3xl border border-slate-100 hover:border-blue-500/10 shadow-xs hover:shadow-lg transition-all duration-300 overflow-hidden flex flex-col md:flex-row">
                    <!-- Vehicle Image -->
                    <div class="w-full md:w-64 h-48 md:h-auto shrink-0 relative overflow-hidden bg-slate-900">
                        <img src="/images/silver_suv.png" alt="Hoang Long Pro SUV" class="w-full h-full object-cover object-center">
                    </div>

                    <!-- Card Body -->
                    <div class="p-6 md:p-8 flex-grow flex flex-col justify-between">
                        <div>
                            <!-- Header Info -->
                            <div class="flex items-start justify-between flex-wrap gap-2 mb-2">
                                <div>
                                    <div class="flex items-center gap-2">
                                        <h3 class="text-base font-bold text-slate-800">Hoàng Long Pro</h3>
                                        <span class="inline-flex items-center gap-0.5 px-1.5 py-0.5 rounded-md text-[10px] font-bold bg-amber-50 text-amber-600 border border-amber-100">
                                            ★ 4.5
                                        </span>
                                    </div>
                                    <span class="text-xs text-slate-400 font-bold tracking-wider uppercase block mt-0.5">Xe 7 chỗ (SUV)</span>
                                </div>
                            </div>

                            <!-- Route Time & Timeline Graphic -->
                            <div class="flex items-center gap-6 my-6">
                                <!-- Departure -->
                                <div class="text-left">
                                    <span class="text-lg font-black text-slate-800">09:30</span>
                                    <span class="text-xs text-slate-400 block font-medium mt-0.5">Rạp Xiếc Trung Ương</span>
                                </div>

                                <!-- Timeline line -->
                                <div class="flex-grow flex flex-col items-center relative">
                                    <span class="text-[10px] font-bold text-slate-400 bg-slate-50 border border-slate-100 px-2 py-0.5 rounded-full absolute -top-3">2h 30m</span>
                                    <div class="w-full h-0.5 bg-slate-200 flex items-center justify-between">
                                        <div class="w-2 h-2 rounded-full bg-blue-600 ring-4 ring-blue-100"></div>
                                        <div class="w-2 h-2 rounded-full bg-blue-600 ring-4 ring-blue-100"></div>
                                    </div>
                                </div>

                                <!-- Destination -->
                                <div class="text-left md:text-right">
                                    <span class="text-lg font-black text-slate-800">12:00</span>
                                    <span class="text-xs text-slate-400 block font-medium mt-0.5">Cầu Rào, Hải Phòng</span>
                                </div>
                            </div>
                        </div>

                        <!-- Amenities & Action -->
                        <div class="flex items-center justify-between border-t border-slate-100 pt-4 flex-wrap gap-4 mt-auto">
                            <!-- Amenity Icons -->
                            <div class="flex items-center gap-3">
                                <span class="inline-flex items-center gap-1.5 text-xs text-slate-500 font-medium">
                                    <span class="w-6 h-6 rounded-full bg-slate-50 flex items-center justify-center text-slate-400">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071a9 9 0 0112.728 0M1.22 9.607a14 14 0 0119.56 0"></path></svg>
                                    </span>
                                    Wifi
                                </span>
                                <span class="inline-flex items-center gap-1.5 text-xs text-slate-500 font-medium">
                                    <span class="w-6 h-6 rounded-full bg-slate-50 flex items-center justify-center text-slate-400">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                                    </span>
                                    Sạc
                                </span>
                                <span class="inline-flex items-center gap-1.5 text-xs text-slate-500 font-medium">
                                    <span class="w-6 h-6 rounded-full bg-slate-50 flex items-center justify-center text-slate-400">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 9.172V5L8 4z"></path></svg>
                                    </span>
                                    Nước
                                </span>
                            </div>

                            <!-- Price and Action -->
                            <div class="flex items-center gap-6">
                                <div class="text-right">
                                    <span class="text-xl font-black text-blue-600 block leading-tight">180.000đ</span>
                                    <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wide">Còn 5 ghế trống</span>
                                </div>
                                <button type="button" class="bg-blue-600 hover:bg-blue-700 active:bg-blue-800 text-white font-bold text-xs py-3 px-5 rounded-2xl transition-all shadow-sm hover:shadow-blue-500/10 cursor-pointer">
                                    Chọn ghế
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Trip Card 3: Xe Ghép 88 -->
                <div class="bg-white rounded-3xl border border-slate-100 hover:border-blue-500/10 shadow-xs hover:shadow-lg transition-all duration-300 overflow-hidden flex flex-col md:flex-row">
                    <!-- Vehicle Image -->
                    <div class="w-full md:w-64 h-48 md:h-auto shrink-0 relative overflow-hidden bg-slate-900">
                        <img src="/images/white_sedan.png" alt="Xe Ghep 88 Sedan" class="w-full h-full object-cover object-center">
                    </div>

                    <!-- Card Body -->
                    <div class="p-6 md:p-8 flex-grow flex flex-col justify-between">
                        <div>
                            <!-- Header Info -->
                            <div class="flex items-start justify-between flex-wrap gap-2 mb-2">
                                <div>
                                    <div class="flex items-center gap-2">
                                        <h3 class="text-base font-bold text-slate-800">Xe Ghép 88</h3>
                                        <span class="inline-flex items-center gap-0.5 px-1.5 py-0.5 rounded-md text-[10px] font-bold bg-amber-50 text-amber-600 border border-amber-100">
                                            ★ 4.2
                                        </span>
                                    </div>
                                    <span class="text-xs text-slate-400 font-bold tracking-wider uppercase block mt-0.5">Xe 4 chỗ (Sedan)</span>
                                </div>
                            </div>

                            <!-- Route Time & Timeline Graphic -->
                            <div class="flex items-center gap-6 my-6">
                                <!-- Departure -->
                                <div class="text-left">
                                    <span class="text-lg font-black text-slate-800">13:00</span>
                                    <span class="text-xs text-slate-400 block font-medium mt-0.5">Đại học Bách Khoa</span>
                                </div>

                                <!-- Timeline line -->
                                <div class="flex-grow flex flex-col items-center relative">
                                    <span class="text-[10px] font-bold text-slate-400 bg-slate-50 border border-slate-100 px-2 py-0.5 rounded-full absolute -top-3">2h 00m</span>
                                    <div class="w-full h-0.5 bg-slate-200 flex items-center justify-between">
                                        <div class="w-2 h-2 rounded-full bg-blue-600 ring-4 ring-blue-100"></div>
                                        <div class="w-2 h-2 rounded-full bg-blue-600 ring-4 ring-blue-100"></div>
                                    </div>
                                </div>

                                <!-- Destination -->
                                <div class="text-left md:text-right">
                                    <span class="text-lg font-black text-slate-800">15:00</span>
                                    <span class="text-xs text-slate-400 block font-medium mt-0.5">Vincom Hải Phòng</span>
                                </div>
                            </div>
                        </div>

                        <!-- Amenities & Action -->
                        <div class="flex items-center justify-between border-t border-slate-100 pt-4 flex-wrap gap-4 mt-auto">
                            <!-- Amenity Icons -->
                            <div class="flex items-center gap-3">
                                <span class="inline-flex items-center gap-1.5 text-xs text-slate-500 font-medium">
                                    <span class="w-6 h-6 rounded-full bg-slate-50 flex items-center justify-center text-slate-400">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707m0-12.728l.707.707m11.314 11.314l.707-.707M12 5a7 7 0 100 14 7 7 0 000-14z"></path></svg>
                                    </span>
                                    Điều hoà
                                </span>
                                <span class="inline-flex items-center gap-1.5 text-xs text-slate-500 font-medium">
                                    <span class="w-6 h-6 rounded-full bg-slate-50 flex items-center justify-center text-slate-400">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                                    </span>
                                    Cốp rộng
                                </span>
                            </div>

                            <!-- Price and Action -->
                            <div class="flex items-center gap-6">
                                <div class="text-right">
                                    <span class="text-xl font-black text-blue-600 block leading-tight">350.000đ</span>
                                    <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wide">Còn 2 ghế trống</span>
                                </div>
                                <button type="button" class="bg-blue-600 hover:bg-blue-700 active:bg-blue-800 text-white font-bold text-xs py-3 px-5 rounded-2xl transition-all shadow-sm hover:shadow-blue-500/10 cursor-pointer">
                                    Chọn ghế
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="flex justify-center items-center gap-2 pt-6">
                    <button type="button" class="w-10 h-10 rounded-xl border border-slate-200 text-slate-400 hover:text-slate-800 hover:border-slate-400 flex items-center justify-center transition-colors cursor-pointer">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"></path>
                        </svg>
                    </button>
                    <button type="button" class="w-10 h-10 rounded-xl bg-blue-600 text-white font-bold flex items-center justify-center shadow-md shadow-blue-500/10 cursor-pointer">1</button>
                    <button type="button" class="w-10 h-10 rounded-xl border border-slate-200 text-slate-600 hover:border-slate-400 font-bold flex items-center justify-center transition-colors cursor-pointer">2</button>
                    <button type="button" class="w-10 h-10 rounded-xl border border-slate-200 text-slate-600 hover:border-slate-400 font-bold flex items-center justify-center transition-colors cursor-pointer">3</button>
                    <button type="button" class="w-10 h-10 rounded-xl border border-slate-200 text-slate-400 hover:text-slate-800 hover:border-slate-400 flex items-center justify-center transition-colors cursor-pointer">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>
                </div>

            </div>

        </div>

    </div>
</main>
@endsection
