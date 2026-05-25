@extends('user.layouts.partials.app')

@section('content')
<main class="flex-grow">

        <!-- Hero Section -->
        <section class="relative bg-slate-900 h-[480px] md:h-[520px] flex items-center justify-center overflow-hidden">
            <!-- Hero Background Image with Overlay -->
            <div class="absolute inset-0 z-0">
                <img src="/images/hero_bg.png" alt="Driver driving a modern car"
                    class="w-full h-full object-cover object-center opacity-45 transform scale-105 transition-transform duration-1000">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/60 to-slate-900/40"></div>
            </div>

            <!-- Hero Content -->
            <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
                <span
                    class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-blue-500/25 border border-blue-400/30 text-blue-300 mb-4 tracking-wider uppercase backdrop-blur-sm animate-pulse">
                    <span class="w-2 h-2 bg-blue-400 rounded-full"></span> Dịch Vụ Xe Ghép Hàng Đầu
                </span>
                <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold tracking-tight leading-tight drop-shadow-md">
                    Xe Ghép Tuyến Giá Rẻ<br class="hidden sm:inline"> Đón Trả Tận Nơi
                </h1>
                <p
                    class="mt-4 text-base sm:text-lg md:text-xl text-slate-200 max-w-3xl mx-auto font-light leading-relaxed drop-shadow-sm">
                    Kết nối bạn với những chuyến đi an toàn, tiết kiệm và chuyên nghiệp nhất trên mọi hành trình.
                </p>
            </div>
        </section>

        <!-- Search Booking Form (Overlay Section) -->
        <section class="relative z-20 max-w-6xl mx-auto px-4 sm:px-6 -mt-16 sm:-mt-20">
            <div class="bg-white rounded-3xl shadow-2xl p-6 sm:p-8 border border-slate-100/50 backdrop-blur-lg">
                <form id="search-booking-form" class="grid grid-cols-1 lg:grid-cols-12 gap-5 items-end">

                    <!-- Điểm đón (Pick-up) -->
                    <div class="lg:col-span-3 relative">
                        <label class="block text-xs font-bold text-slate-400 uppercase tracking-wider mb-2">Điểm
                            đón</label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-blue-500">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </span>
                            <input type="text" id="pickup-input" placeholder="Nhập tỉnh, thành phố..." readonly
                                class="w-full pl-11 pr-4 py-3.5 bg-slate-50 border border-slate-200 rounded-2xl text-sm font-semibold text-slate-700 placeholder-slate-400 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 transition-all cursor-pointer">
                        </div>

                        <!-- Dropdown Mock -->
                        <div id="pickup-dropdown"
                            class="hidden absolute left-0 right-0 mt-2 bg-white border border-slate-100 rounded-2xl shadow-xl z-30 max-h-60 overflow-y-auto py-2">
                            <div class="px-4 py-2 text-xs font-bold text-slate-400 uppercase">Tỉnh / Thành phố phổ biến
                            </div>
                            <button type="button"
                                class="w-full text-left px-4 py-2.5 text-sm font-medium text-slate-700 hover:bg-slate-50 transition-colors">Hà
                                Nội</button>
                            <button type="button"
                                class="w-full text-left px-4 py-2.5 text-sm font-medium text-slate-700 hover:bg-slate-50 transition-colors">Hải
                                Phòng</button>
                            <button type="button"
                                class="w-full text-left px-4 py-2.5 text-sm font-medium text-slate-700 hover:bg-slate-50 transition-colors">Quảng
                                Ninh</button>
                            <button type="button"
                                class="w-full text-left px-4 py-2.5 text-sm font-medium text-slate-700 hover:bg-slate-50 transition-colors">Sài
                                Gòn</button>
                            <button type="button"
                                class="w-full text-left px-4 py-2.5 text-sm font-medium text-slate-700 hover:bg-slate-50 transition-colors">Đà
                                Lạt</button>
                            <button type="button"
                                class="w-full text-left px-4 py-2.5 text-sm font-medium text-slate-700 hover:bg-slate-50 transition-colors">Vũng
                                Tàu</button>
                        </div>
                    </div>

                    <!-- Điểm trả (Drop-off) -->
                    <div class="lg:col-span-3 relative">
                        <label class="block text-xs font-bold text-slate-400 uppercase tracking-wider mb-2">Điểm
                            trả</label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-orange-500">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </span>
                            <input type="text" id="dropoff-input" placeholder="Nhập tỉnh, thành phố..." readonly
                                class="w-full pl-11 pr-4 py-3.5 bg-slate-50 border border-slate-200 rounded-2xl text-sm font-semibold text-slate-700 placeholder-slate-400 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 transition-all cursor-pointer">
                        </div>

                        <!-- Dropdown Mock -->
                        <div id="dropoff-dropdown"
                            class="hidden absolute left-0 right-0 mt-2 bg-white border border-slate-100 rounded-2xl shadow-xl z-30 max-h-60 overflow-y-auto py-2">
                            <div class="px-4 py-2 text-xs font-bold text-slate-400 uppercase">Tỉnh / Thành phố phổ biến
                            </div>
                            <button type="button"
                                class="w-full text-left px-4 py-2.5 text-sm font-medium text-slate-700 hover:bg-slate-50 transition-colors">Hà
                                Nội</button>
                            <button type="button"
                                class="w-full text-left px-4 py-2.5 text-sm font-medium text-slate-700 hover:bg-slate-50 transition-colors">Hải
                                Phòng</button>
                            <button type="button"
                                class="w-full text-left px-4 py-2.5 text-sm font-medium text-slate-700 hover:bg-slate-50 transition-colors">Quảng
                                Ninh</button>
                            <button type="button"
                                class="w-full text-left px-4 py-2.5 text-sm font-medium text-slate-700 hover:bg-slate-50 transition-colors">Sài
                                Gòn</button>
                            <button type="button"
                                class="w-full text-left px-4 py-2.5 text-sm font-medium text-slate-700 hover:bg-slate-50 transition-colors">Đà
                                Lạt</button>
                            <button type="button"
                                class="w-full text-left px-4 py-2.5 text-sm font-medium text-slate-700 hover:bg-slate-50 transition-colors">Vũng
                                Tàu</button>
                        </div>
                    </div>

                    <!-- Ngày đi (Departure Date) -->
                    <div class="lg:col-span-2">
                        <label class="block text-xs font-bold text-slate-400 uppercase tracking-wider mb-2">Ngày
                            đi</label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-blue-500">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </span>
                            <input type="date" id="departure-date"
                                class="w-full pl-11 pr-4 py-3.5 bg-slate-50 border border-slate-200 rounded-2xl text-sm font-semibold text-slate-700 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 transition-all cursor-pointer">
                        </div>
                    </div>

                    <!-- Số người (Passengers) -->
                    <div class="lg:col-span-2">
                        <label class="block text-xs font-bold text-slate-400 uppercase tracking-wider mb-2">Số
                            người</label>
                        <div
                            class="relative flex items-center bg-slate-50 border border-slate-200 rounded-2xl py-2 px-3">
                            <span class="text-blue-500 mr-2 pl-1.5">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a3 3 0 11-6 0 3 3 0 016 0z">
                                    </path>
                                </svg>
                            </span>
                            <div class="flex items-center justify-between w-full">
                                <button type="button" id="passenger-dec"
                                    class="w-8 h-8 rounded-full border border-slate-200 hover:border-blue-500 bg-white hover:bg-blue-50 text-slate-600 hover:text-blue-600 flex items-center justify-center font-bold text-sm transition-colors cursor-pointer select-none">-</button>
                                <span id="passenger-count" class="text-sm font-bold text-slate-700 px-2">1</span>
                                <button type="button" id="passenger-inc"
                                    class="w-8 h-8 rounded-full border border-slate-200 hover:border-blue-500 bg-white hover:bg-blue-50 text-slate-600 hover:text-blue-600 flex items-center justify-center font-bold text-sm transition-colors cursor-pointer select-none">+</button>
                            </div>
                        </div>
                    </div>

                    <!-- Button: Tìm xe ngay -->
                    <div class="lg:col-span-2">
                        <button type="submit"
                            class="w-full bg-blue-600 hover:bg-blue-700 active:bg-blue-800 text-white font-semibold py-4 px-6 rounded-2xl shadow-lg hover:shadow-blue-500/25 transition-all duration-300 flex items-center justify-center gap-2 cursor-pointer border border-transparent">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                            <span>Tìm xe ngay</span>
                        </button>
                    </div>

                </form>
            </div>
        </section>

        <!-- Features Section ("Tại sao nên chọn Xe Ghép Pro?") -->
        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-extrabold text-slate-900 tracking-tight">
                    Tại sao nên chọn <span class="text-blue-600 relative">Xe Ghép Pro<span
                            class="absolute bottom-0 left-0 right-0 h-1 bg-blue-600/20 rounded-full"></span></span>?
                </h2>
                <p class="mt-3 text-slate-500 max-w-xl mx-auto text-sm sm:text-base font-light">
                    Mang lại trải nghiệm di chuyển tối ưu vượt trội, an tâm tối đa trên mọi cung đường.
                </p>
            </div>

            <!-- Features Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

                <!-- Card 1: Tiết kiệm -->
                <div
                    class="bg-white rounded-3xl p-8 border border-slate-100 hover:border-blue-500/10 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 group">
                    <div
                        class="w-14 h-14 rounded-2xl bg-blue-50 text-blue-600 flex items-center justify-center mb-6 shadow-inner group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-800 mb-2">Tiết kiệm</h3>
                    <p class="text-slate-500 text-sm leading-relaxed font-light">
                        Giá cả luôn cạnh tranh nhất, tối ưu chi phí cho hành trình của bạn. Không phát sinh chi phí ẩn.
                    </p>
                </div>

                <!-- Card 2: Đưa đón tận nhà -->
                <div
                    class="bg-white rounded-3xl p-8 border border-slate-100 hover:border-orange-500/10 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 group">
                    <div
                        class="w-14 h-14 rounded-2xl bg-orange-50 text-orange-600 flex items-center justify-center mb-6 shadow-inner group-hover:bg-orange-600 group-hover:text-white transition-all duration-300">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-800 mb-2">Đưa đón tận nhà</h3>
                    <p class="text-slate-500 text-sm leading-relaxed font-light">
                        Tự do chọn vị trí đón trả theo yêu cầu, giúp bạn hoàn toàn chủ động thời gian của mình.
                    </p>
                </div>

                <!-- Card 3: Tài xế chuyên nghiệp -->
                <div
                    class="bg-white rounded-3xl p-8 border border-slate-100 hover:border-emerald-500/10 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 group">
                    <div
                        class="w-14 h-14 rounded-2xl bg-emerald-50 text-emerald-600 flex items-center justify-center mb-6 shadow-inner group-hover:bg-emerald-600 group-hover:text-white transition-all duration-300">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-800 mb-2">Tài xế chuyên nghiệp</h3>
                    <p class="text-slate-500 text-sm leading-relaxed font-light">
                        Đội ngũ tài xế được tuyển chọn kỹ lưỡng, kinh nghiệm lâu năm và thái độ phục vụ văn minh lịch
                        sự.
                    </p>
                </div>

                <!-- Card 4: Đặt chỗ nhanh chóng -->
                <div
                    class="bg-white rounded-3xl p-8 border border-slate-100 hover:border-purple-500/10 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 group">
                    <div
                        class="w-14 h-14 rounded-2xl bg-purple-50 text-purple-600 flex items-center justify-center mb-6 shadow-inner group-hover:bg-purple-600 group-hover:text-white transition-all duration-300">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-800 mb-2">Đặt chỗ nhanh chóng</h3>
                    <p class="text-slate-500 text-sm leading-relaxed font-light">
                        Thao tác đặt xe chỉ trong 30 giây qua website hoặc ứng dụng di động, xác nhận tức thì qua tin
                        nhắn.
                    </p>
                </div>

            </div>
        </section>

        <!-- Popular Routes Section ("Tuyến đường phổ biến") -->
        <section class="bg-slate-50 py-20 border-y border-slate-100">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                <!-- Section Header -->
                <div class="flex items-end justify-between mb-10">
                    <div>
                        <h2 class="text-3xl font-extrabold text-slate-900 tracking-tight">Tuyến đường phổ biến</h2>
                        <p class="mt-2 text-slate-500 text-sm font-light">Khám phá những hành trình được yêu thích nhất
                            với giá cực tốt.</p>
                    </div>

                    <!-- View All & Slider Controls -->
                    <div class="flex items-center gap-4">
                        <a href="#"
                            class="hidden sm:inline-flex items-center gap-1 text-sm font-semibold text-blue-600 hover:text-blue-700 transition-colors">
                            Xem tất cả
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                        </a>
                        <!-- Navigation Buttons -->
                        <div class="flex gap-2">
                            <button id="slider-prev"
                                class="w-10 h-10 rounded-full bg-white border border-slate-200 text-slate-600 hover:bg-blue-600 hover:text-white hover:border-blue-600 flex items-center justify-center transition-all shadow-sm cursor-pointer">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 19l-7-7 7-7"></path>
                                </svg>
                            </button>
                            <button id="slider-next"
                                class="w-10 h-10 rounded-full bg-white border border-slate-200 text-slate-600 hover:bg-blue-600 hover:text-white hover:border-blue-600 flex items-center justify-center transition-all shadow-sm cursor-pointer">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Routes Horizontal Scroll Area -->
                <div id="routes-slider" class="flex gap-6 overflow-x-auto pb-4 scroll-smooth hide-scrollbar snap-x">

                    <!-- Route 1: Hà Nội - Hải Phòng -->
                    <div
                        class="min-w-[280px] sm:min-w-[320px] md:min-w-[340px] flex-1 snap-start bg-white rounded-3xl overflow-hidden border border-slate-100 shadow-sm hover:shadow-lg transition-shadow duration-300 relative group">
                        <div class="h-60 overflow-hidden relative">
                            <img src="/images/route_hanoi_haiphong.png" alt="Hanoi to Hai Phong route"
                                class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                            <!-- Gradient Overlay -->
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/35 to-transparent">
                            </div>

                            <!-- Heart Favorite button -->
                            <button
                                class="absolute top-4 right-4 w-9 h-9 rounded-full bg-white/20 backdrop-blur-md text-white hover:bg-white hover:text-red-500 flex items-center justify-center transition-colors cursor-pointer heart-btn">
                                <svg class="w-5 h-5 transition-transform active:scale-125" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                    </path>
                                </svg>
                            </button>

                            <!-- Route Content overlay -->
                            <div class="absolute bottom-4 left-4 right-4 text-white">
                                <h3 class="text-lg font-bold">Hà Nội ↔ Hải Phòng</h3>
                                <div class="flex items-center justify-between mt-1">
                                    <span class="text-xs text-slate-200 font-light">Quãng đường: ~120km</span>
                                    <span class="text-sm font-semibold text-blue-300">Từ 150K</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Route 2: Sài Gòn - Đà Lạt -->
                    <div
                        class="min-w-[280px] sm:min-w-[320px] md:min-w-[340px] flex-1 snap-start bg-white rounded-3xl overflow-hidden border border-slate-100 shadow-sm hover:shadow-lg transition-shadow duration-300 relative group">
                        <div class="h-60 overflow-hidden relative">
                            <img src="/images/route_saigon_dalat.png" alt="Saigon to Da Lat route"
                                class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                            <!-- Gradient Overlay -->
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/35 to-transparent">
                            </div>

                            <!-- Heart Favorite button -->
                            <button
                                class="absolute top-4 right-4 w-9 h-9 rounded-full bg-white/20 backdrop-blur-md text-white hover:bg-white hover:text-red-500 flex items-center justify-center transition-colors cursor-pointer heart-btn">
                                <svg class="w-5 h-5 transition-transform active:scale-125" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                    </path>
                                </svg>
                            </button>

                            <!-- Route Content overlay -->
                            <div class="absolute bottom-4 left-4 right-4 text-white">
                                <h3 class="text-lg font-bold">Sài Gòn ↔ Đà Lạt</h3>
                                <div class="flex items-center justify-between mt-1">
                                    <span class="text-xs text-slate-200 font-light">Quãng đường: ~300km</span>
                                    <span class="text-sm font-semibold text-blue-300">Từ 250K</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Route 3: Hà Nội - Quảng Ninh -->
                    <div
                        class="min-w-[280px] sm:min-w-[320px] md:min-w-[340px] flex-1 snap-start bg-white rounded-3xl overflow-hidden border border-slate-100 shadow-sm hover:shadow-lg transition-shadow duration-300 relative group">
                        <div class="h-60 overflow-hidden relative">
                            <img src="/images/route_hanoi_quangninh.png" alt="Hanoi to Quang Ninh route"
                                class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                            <!-- Gradient Overlay -->
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/35 to-transparent">
                            </div>

                            <!-- Heart Favorite button -->
                            <button
                                class="absolute top-4 right-4 w-9 h-9 rounded-full bg-white/20 backdrop-blur-md text-white hover:bg-white hover:text-red-500 flex items-center justify-center transition-colors cursor-pointer heart-btn">
                                <svg class="w-5 h-5 transition-transform active:scale-125" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                    </path>
                                </svg>
                            </button>

                            <!-- Route Content overlay -->
                            <div class="absolute bottom-4 left-4 right-4 text-white">
                                <h3 class="text-lg font-bold">Hà Nội ↔ Quảng Ninh</h3>
                                <div class="flex items-center justify-between mt-1">
                                    <span class="text-xs text-slate-200 font-light">Quãng đường: ~150km</span>
                                    <span class="text-sm font-semibold text-blue-300">Từ 200K</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Route 4: Sài Gòn - Vũng Tàu -->
                    <div
                        class="min-w-[280px] sm:min-w-[320px] md:min-w-[340px] flex-1 snap-start bg-white rounded-3xl overflow-hidden border border-slate-100 shadow-sm hover:shadow-lg transition-shadow duration-300 relative group">
                        <div class="h-60 overflow-hidden relative">
                            <img src="/images/route_saigon_vungtau.png" alt="Saigon to Vung Tàu route"
                                class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                            <!-- Gradient Overlay -->
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/35 to-transparent">
                            </div>

                            <!-- Heart Favorite button -->
                            <button
                                class="absolute top-4 right-4 w-9 h-9 rounded-full bg-white/20 backdrop-blur-md text-white hover:bg-white hover:text-red-500 flex items-center justify-center transition-colors cursor-pointer heart-btn">
                                <svg class="w-5 h-5 transition-transform active:scale-125" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                    </path>
                                </svg>
                            </button>

                            <!-- Route Content overlay -->
                            <div class="absolute bottom-4 left-4 right-4 text-white">
                                <h3 class="text-lg font-bold">Sài Gòn ↔ Vũng Tàu</h3>
                                <div class="flex items-center justify-between mt-1">
                                    <span class="text-xs text-slate-200 font-light">Quãng đường: ~100km</span>
                                    <span class="text-sm font-semibold text-blue-300">Từ 180K</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- View all mobile -->
                <div class="text-center mt-6 sm:hidden">
                    <a href="#"
                        class="inline-flex items-center gap-1 text-sm font-semibold text-blue-600 hover:text-blue-700 transition-colors">
                        Xem tất cả
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
        </section>

        <!-- Promotions Section ("Ưu đãi nổi bật") -->
        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="mb-12">
                <h2 class="text-3xl font-extrabold text-slate-900 tracking-tight">Ưu đãi nổi bật</h2>
                <p class="mt-2 text-slate-500 text-sm font-light">Cập nhật những chương trình ưu đãi và khuyến mãi hấp
                    dẫn nhất từ Xe Ghép Pro.</p>
            </div>

            <!-- Promo Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <!-- Promo 1 -->
                <div
                    class="bg-white rounded-3xl overflow-hidden border border-slate-100 hover:shadow-xl transition-shadow duration-300 flex flex-col h-full">
                    <!-- Custom Styled Card Mockup stack -->
                    <div
                        class="h-48 bg-gradient-to-br from-amber-400 to-orange-500 flex items-center justify-center p-6 relative overflow-hidden">
                        <!-- Overlapping decorative cards -->
                        <div
                            class="w-40 h-24 bg-white/10 rounded-2xl border border-white/20 transform -rotate-12 translate-x-4 translate-y-2 absolute">
                        </div>
                        <div
                            class="w-40 h-24 bg-white/15 rounded-2xl border border-white/25 transform rotate-6 -translate-x-2 absolute flex flex-col justify-between p-3 text-white shadow-lg">
                            <span
                                class="text-[10px] font-bold tracking-widest bg-white/20 px-2 py-0.5 rounded-full w-max">NEW20</span>
                            <span class="text-lg font-black leading-none">GIẢM 20%</span>
                        </div>
                    </div>
                    <!-- Details -->
                    <div class="p-6 flex flex-col flex-grow">
                        <span
                            class="inline-flex px-2.5 py-1 rounded-full text-xs font-semibold bg-orange-100 text-orange-600 mb-3 w-max">MỚI</span>
                        <h3 class="text-lg font-bold text-slate-800 mb-2">Giảm 20% Chuyến Đầu</h3>
                        <p class="text-slate-500 text-sm font-light leading-relaxed mb-6 flex-grow">
                            Nhập mã <span class="font-bold text-slate-700">NEW20</span> để nhận ưu đãi lên đến 50k cho
                            chuyến đi đầu tiên trên ứng dụng Xe Ghép Pro.
                        </p>
                        <button type="button"
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-4 rounded-2xl transition-colors cursor-pointer text-sm shadow-md hover:shadow-blue-500/10 claim-promo-btn border border-transparent"
                            data-code="NEW20" data-discount="20%">
                            Nhận ưu đãi
                        </button>
                    </div>
                </div>

                <!-- Promo 2 -->
                <div
                    class="bg-white rounded-3xl overflow-hidden border border-slate-100 hover:shadow-xl transition-shadow duration-300 flex flex-col h-full">
                    <!-- Custom Styled Card Mockup stack -->
                    <div
                        class="h-48 bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center p-6 relative overflow-hidden">
                        <!-- Overlapping decorative cards -->
                        <div
                            class="w-40 h-24 bg-white/10 rounded-2xl border border-white/20 transform -rotate-6 translate-x-2 translate-y-3 absolute">
                        </div>
                        <div
                            class="w-40 h-24 bg-white/15 rounded-2xl border border-white/25 transform -rotate-3 -translate-x-4 absolute flex flex-col justify-between p-3 text-white shadow-lg">
                            <span
                                class="text-[10px] font-bold tracking-widest bg-white/20 px-2 py-0.5 rounded-full w-max">VNPAY5</span>
                            <span class="text-lg font-black leading-none">HOÀN 5%</span>
                        </div>
                    </div>
                    <!-- Details -->
                    <div class="p-6 flex flex-col flex-grow">
                        <span
                            class="inline-flex px-2.5 py-1 rounded-full text-xs font-semibold bg-blue-100 text-blue-600 mb-3 w-max">PHỔ
                            BIẾN</span>
                        <h3 class="text-lg font-bold text-slate-800 mb-2">Hoàn Tiền 5%</h3>
                        <p class="text-slate-500 text-sm font-light leading-relaxed mb-6 flex-grow">
                            Hoàn tiền trực tiếp 5% (tối đa 30k) vào ví sau mỗi hành trình thanh toán qua ví điện tử
                            VNPay liên kết.
                        </p>
                        <button type="button"
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-4 rounded-2xl transition-colors cursor-pointer text-sm shadow-md hover:shadow-blue-500/10 claim-promo-btn border border-transparent"
                            data-code="VNPAY5" data-discount="5%">
                            Nhận ưu đãi
                        </button>
                    </div>
                </div>

                <!-- Promo 3 -->
                <div
                    class="bg-white rounded-3xl overflow-hidden border border-slate-100 hover:shadow-xl transition-shadow duration-300 flex flex-col h-full">
                    <!-- Custom Styled Card Mockup stack -->
                    <div
                        class="h-48 bg-gradient-to-br from-emerald-400 to-teal-600 flex items-center justify-center p-6 relative overflow-hidden">
                        <!-- Overlapping decorative cards -->
                        <div
                            class="w-40 h-24 bg-white/10 rounded-2xl border border-white/20 transform rotate-12 -translate-x-2 translate-y-2 absolute">
                        </div>
                        <div
                            class="w-40 h-24 bg-white/15 rounded-2xl border border-white/25 transform rotate-3 translate-x-3 absolute flex flex-col justify-between p-3 text-white shadow-lg">
                            <span
                                class="text-[10px] font-bold tracking-widest bg-white/20 px-2 py-0.5 rounded-full w-max">SHARE50</span>
                            <span class="text-lg font-black leading-none">QUÀ 50K</span>
                        </div>
                    </div>
                    <!-- Details -->
                    <div class="p-6 flex flex-col flex-grow">
                        <span
                            class="inline-flex px-2.5 py-1 rounded-full text-xs font-semibold bg-emerald-100 text-emerald-600 mb-3 w-max">QUÀ
                            TẶNG</span>
                        <h3 class="text-lg font-bold text-slate-800 mb-2">Giới Thiệu Bạn Bè</h3>
                        <p class="text-slate-500 text-sm font-light leading-relaxed mb-6 flex-grow">
                            Nhận ngay voucher trị giá 50k vào tài khoản khi giới thiệu bạn bè đăng ký và đi chuyến đầu
                            tiên thành công.
                        </p>
                        <button type="button"
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-4 rounded-2xl transition-colors cursor-pointer text-sm shadow-md hover:shadow-blue-500/10 claim-promo-btn border border-transparent"
                            data-code="SHARE50" data-discount="50K">
                            Nhận ưu đãi
                        </button>
                    </div>
                </div>

            </div>
        </section>

        <!-- App Download Section -->
        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-20">
            <div
                class="bg-gradient-to-r from-blue-700 to-indigo-900 rounded-[32px] overflow-hidden text-white shadow-xl relative">

                <!-- Overlay background graphic pattern -->
                <div
                    class="absolute inset-0 z-0 opacity-10 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-white via-indigo-900 to-transparent">
                </div>

                <div class="grid grid-cols-1 md:grid-cols-12 gap-8 items-center p-8 sm:p-12 md:p-16 relative z-10">

                    <!-- Left side text content -->
                    <div class="md:col-span-7 space-y-6">
                        <span
                            class="inline-flex px-3 py-1 rounded-full text-xs font-semibold bg-white/10 text-blue-200 border border-white/10 tracking-wide uppercase">
                            Ứng dụng di động
                        </span>
                        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black leading-tight tracking-tight">
                            Tải ứng dụng<br> Xe Ghép Pro ngay hôm nay
                        </h2>
                        <p class="text-slate-200 text-sm sm:text-base font-light leading-relaxed max-w-xl">
                            Theo dõi hành trình thời gian thực, quản lý đặt chỗ dễ dàng và nhận ngay ưu đãi độc quyền
                            20% cho chuyến đi đầu tiên khi tải app.
                        </p>

                        <!-- Download Badges -->
                        <div class="flex flex-wrap gap-4 pt-2">
                            <!-- App Store -->
                            <a href="#"
                                class="flex items-center gap-3 bg-black hover:bg-slate-900 border border-slate-700 hover:border-slate-600 px-5 py-3 rounded-2xl transition-all shadow-md group">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.81-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M15.97 4.17c.66-.81 1.11-1.94.99-3.07-1 .04-2.21.67-2.93 1.49-.62.69-1.16 1.84-1.01 2.96 1.12.09 2.27-.57 2.95-1.38z" />
                                </svg>
                                <div class="text-left leading-none">
                                    <span class="text-[10px] text-slate-400 block mb-0.5">Tải về trên</span>
                                    <span
                                        class="text-sm font-bold text-white group-hover:text-blue-400 transition-colors">App
                                        Store</span>
                                </div>
                            </a>

                            <!-- Google Play -->
                            <a href="#"
                                class="flex items-center gap-3 bg-black hover:bg-slate-900 border border-slate-700 hover:border-slate-600 px-5 py-3 rounded-2xl transition-all shadow-md group">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M3.25 2.53c-.07.08-.11.21-.11.38v18.18c0 .17.04.3.11.38l.05.05 10.1-10.1v-.2L3.3 2.48l-.05.05zm10.76 10.76l2.56-2.56-6.07-3.46-3.2 3.2 6.71 2.82zm.1-1.2v.2l3.41-3.41c.21-.21.21-.55 0-.76L14.11 12.1zm-3.51-1.31l3.2-3.2L3.25 21.09c.07.08.11.21.11.38v.02c0-.17-.04-.3-.11-.38L10.6 10.79z" />
                                </svg>
                                <div class="text-left leading-none">
                                    <span class="text-[10px] text-slate-400 block mb-0.5">Tải về trên</span>
                                    <span
                                        class="text-sm font-bold text-white group-hover:text-blue-400 transition-colors">Google
                                        Play</span>
                                </div>
                            </a>
                        </div>

                    </div>

                    <!-- Right side phone mockup graphic -->
                    <div class="md:col-span-5 relative flex justify-center mt-10 md:mt-0">
                        <div
                            class="w-[260px] h-[520px] bg-slate-950 rounded-[48px] border-[7px] border-slate-800 shadow-2xl relative overflow-hidden z-10 ring-8 ring-slate-900/40">
                            <!-- Speaker/Camera Notch -->
                            <div
                                class="absolute top-0 left-1/2 transform -translate-x-1/2 w-28 h-6 bg-slate-850 rounded-b-2xl z-30 flex items-center justify-center gap-1.5">
                                <div class="w-8 h-1 bg-slate-700 rounded-full"></div>
                                <div class="w-2.5 h-2.5 bg-slate-900 rounded-full border-2 border-slate-800"></div>
                            </div>

                            <!-- Screen Container -->
                            <div class="w-full h-full bg-slate-50 flex flex-col p-4 pt-10 text-slate-800 relative select-none">

                                <!-- Mock App Header -->
                                <div class="flex items-center justify-between pb-3 border-b border-slate-200">
                                    <span class="text-[11px] font-black text-blue-600 tracking-tight">Xe Ghép Pro</span>
                                    <div class="flex items-center gap-1">
                                        <span class="w-2 h-2 rounded-full bg-emerald-500 animate-ping"></span>
                                    </div>
                                </div>

                                <!-- App Search Box Mockup -->
                                <div class="mt-4 bg-white p-3 rounded-2xl border border-slate-100 shadow-sm space-y-3">
                                    <div class="space-y-1">
                                        <span class="text-[9px] font-bold text-slate-400 block uppercase">Điểm đi</span>
                                        <div
                                            class="bg-slate-50 py-1.5 px-2.5 rounded-lg text-[11px] text-slate-600 font-semibold border border-slate-100">
                                            Hà Nội</div>
                                    </div>
                                    <div class="space-y-1">
                                        <span class="text-[9px] font-bold text-slate-400 block uppercase">Điểm
                                            đến</span>
                                        <div
                                            class="bg-slate-50 py-1.5 px-2.5 rounded-lg text-[11px] text-slate-300 font-semibold border border-slate-100">
                                            Nhập điểm đến...</div>
                                    </div>
                                    <button type="button"
                                        class="w-full bg-blue-600 text-white font-bold py-2 rounded-xl text-[11px] mt-1 shadow-sm">Tìm
                                        xe ngay</button>
                                </div>

                                <!-- Active Search Loader Mock -->
                                <div class="flex-grow flex flex-col items-center justify-center py-6">
                                    <div
                                        class="w-12 h-12 rounded-full bg-blue-50 flex items-center justify-center mb-3">
                                        <!-- Car Icon -->
                                        <svg class="w-6 h-6 text-blue-600 animate-bounce" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z">
                                            </path>
                                        </svg>
                                    </div>
                                    <span class="text-[11px] font-bold text-slate-500">Đang tìm chuyến xe...</span>
                                    <span class="text-[9px] text-slate-400 mt-1">Hơn 500+ tài xế đang trực tuyến</span>
                                </div>

                                <!-- Phone Bottom Navigation -->
                                <div class="pt-2 border-t border-slate-200 flex justify-around text-slate-400">
                                    <span class="text-blue-600"><svg class="w-5 h-5" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                                        </svg></span>
                                    <span><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                        </svg></span>
                                    <span><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg></span>
                                </div>

                            </div>
                        </div>

                        <!-- Back decorative glow circles -->
                        <div
                            class="absolute w-72 h-72 rounded-full bg-blue-500/20 filter blur-3xl -top-12 -right-12 z-0">
                        </div>
                        <div
                            class="absolute w-60 h-60 rounded-full bg-indigo-500/25 filter blur-3xl -bottom-10 -left-6 z-0">
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>

    <!-- Promotion Claims Popup Modal -->
    <div id="promo-modal" class="fixed inset-0 z-50 flex items-center justify-center hidden">
        <div class="absolute inset-0 bg-slate-900/60 backdrop-blur-sm" id="promo-modal-overlay"></div>
        <div class="bg-white rounded-3xl p-8 max-w-sm w-full mx-4 shadow-2xl relative z-10 border border-slate-100 text-center transform scale-95 transition-transform duration-300"
            id="promo-modal-content">

            <!-- Success icon animation -->
            <div
                class="w-16 h-16 bg-emerald-50 text-emerald-500 rounded-full flex items-center justify-center mx-auto mb-5 shadow-inner">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                </svg>
            </div>

            <h3 class="text-xl font-bold text-slate-800 mb-1">Nhận ưu đãi thành công!</h3>
            <p class="text-slate-500 text-sm font-light mb-6">Mã ưu đãi của bạn đã sẵn sàng sử dụng.</p>

            <!-- Promo code display box -->
            <div
                class="bg-slate-50 border border-slate-200 rounded-2xl p-4 flex items-center justify-between gap-4 mb-6">
                <div class="text-left">
                    <span class="text-[10px] text-slate-400 font-bold block uppercase tracking-wider">Mã khuyến
                        mãi</span>
                    <span class="text-lg font-extrabold text-blue-600 tracking-wide" id="promo-modal-code">NEW20</span>
                </div>
                <button type="button" id="copy-promo-btn"
                    class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2.5 px-4 rounded-xl text-xs transition-colors cursor-pointer select-none">
                    Sao chép
                </button>
            </div>

            <button type="button" id="close-promo-btn"
                class="w-full border border-slate-200 hover:bg-slate-50 text-slate-600 font-semibold py-3 px-4 rounded-2xl transition-colors cursor-pointer text-sm">
                Đóng
            </button>
        </div>
    </div>

    <!-- Active Search Mock Results Popup Modal -->
    <div id="search-modal" class="fixed inset-0 z-50 flex items-center justify-center hidden">
        <div class="absolute inset-0 bg-slate-900/60 backdrop-blur-sm" id="search-modal-overlay"></div>
        <div class="bg-white rounded-3xl p-8 max-w-md w-full mx-4 shadow-2xl relative z-10 border border-slate-100 transform scale-95 transition-transform duration-300"
            id="search-modal-content">

            <div class="text-center mb-6">
                <div
                    class="w-14 h-14 bg-blue-50 text-blue-600 rounded-full flex items-center justify-center mx-auto mb-3 animate-pulse">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-slate-800">Kết quả tìm kiếm xe ghép</h3>
                <p class="text-slate-500 text-xs font-light mt-1" id="search-modal-route">Từ Hà Nội đi Hải Phòng</p>
            </div>

            <!-- List of driver card mockups -->
            <div class="space-y-4 max-h-60 overflow-y-auto pr-1 hide-scrollbar">

                <!-- Driver Card 1 -->
                <div
                    class="bg-slate-50 hover:bg-blue-50/30 border border-slate-200/60 rounded-2xl p-4 flex items-center justify-between transition-colors">
                    <div class="flex items-center gap-3">
                        <div
                            class="w-10 h-10 rounded-full bg-slate-300 flex items-center justify-center font-bold text-slate-700 text-sm border-2 border-white shadow-sm overflow-hidden">
                            <span>TD</span>
                        </div>
                        <div>
                            <span class="text-sm font-bold text-slate-800 block">Trần Văn Dũng</span>
                            <span class="text-[10px] text-slate-400 font-medium block">Xe 7 Chỗ • Ford Everest</span>
                            <span class="text-[10px] text-emerald-600 font-bold block mt-0.5">★ 4.9 (120 chuyến)</span>
                        </div>
                    </div>
                    <div class="text-right">
                        <span class="text-xs text-slate-400 block font-light">Xuất phát: 08:30</span>
                        <span class="text-sm font-bold text-blue-600 block mt-0.5">180K/ghế</span>
                    </div>
                </div>

                <!-- Driver Card 2 -->
                <div
                    class="bg-slate-50 hover:bg-blue-50/30 border border-slate-200/60 rounded-2xl p-4 flex items-center justify-between transition-colors">
                    <div class="flex items-center gap-3">
                        <div
                            class="w-10 h-10 rounded-full bg-slate-300 flex items-center justify-center font-bold text-slate-700 text-sm border-2 border-white shadow-sm overflow-hidden">
                            <span>NH</span>
                        </div>
                        <div>
                            <span class="text-sm font-bold text-slate-800 block">Nguyễn Văn Hùng</span>
                            <span class="text-[10px] text-slate-400 font-medium block">Xe 4 Chỗ • Toyota Vios</span>
                            <span class="text-[10px] text-emerald-600 font-bold block mt-0.5">★ 4.8 (85 chuyến)</span>
                        </div>
                    </div>
                    <div class="text-right">
                        <span class="text-xs text-slate-400 block font-light">Xuất phát: 14:00</span>
                        <span class="text-sm font-bold text-blue-600 block mt-0.5">150K/ghế</span>
                    </div>
                </div>

            </div>

            <button type="button" id="close-search-btn"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3.5 px-4 rounded-2xl transition-colors cursor-pointer text-sm shadow-md hover:shadow-blue-500/10 mt-6 border border-transparent">
                Đóng
            </button>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- Active Interactivity Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {

            // --- Mobile Menu Toggle ---
            const mobileMenuBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');
            if (mobileMenuBtn && mobileMenu) {
                mobileMenuBtn.addEventListener('click', () => {
                    mobileMenu.classList.toggle('hidden');
                });
            }

            // --- Dropdown Select Mocking ---
            const pickupInput = document.getElementById('pickup-input');
            const pickupDropdown = document.getElementById('pickup-dropdown');
            const dropoffInput = document.getElementById('dropoff-input');
            const dropoffDropdown = document.getElementById('dropoff-dropdown');

            if (pickupInput && pickupDropdown) {
                pickupInput.addEventListener('click', (e) => {
                    e.stopPropagation();
                    pickupDropdown.classList.toggle('hidden');
                    if (dropoffDropdown) dropoffDropdown.classList.add('hidden');
                });

                pickupDropdown.querySelectorAll('button').forEach(btn => {
                    btn.addEventListener('click', () => {
                        pickupInput.value = btn.innerText;
                        pickupDropdown.classList.add('hidden');
                    });
                });
            }

            if (dropoffInput && dropoffDropdown) {
                dropoffInput.addEventListener('click', (e) => {
                    e.stopPropagation();
                    dropoffDropdown.classList.toggle('hidden');
                    if (pickupDropdown) pickupDropdown.classList.add('hidden');
                });

                dropoffDropdown.querySelectorAll('button').forEach(btn => {
                    btn.addEventListener('click', () => {
                        dropoffInput.value = btn.innerText;
                        dropoffDropdown.classList.add('hidden');
                    });
                });
            }

            // Close dropdowns on outside click
            document.addEventListener('click', () => {
                if (pickupDropdown) pickupDropdown.classList.add('hidden');
                if (dropoffDropdown) dropoffDropdown.classList.add('hidden');
            });

            // --- Set Default Date ---
            const dateInput = document.getElementById('departure-date');
            if (dateInput) {
                const today = new Date();
                const year = today.getFullYear();
                const month = String(today.getMonth() + 1).padStart(2, '0');
                const day = String(today.getDate()).padStart(2, '0');
                dateInput.value = `${year}-${month}-${day}`;
                // Set min date to today
                dateInput.min = `${year}-${month}-${day}`;
            }

            // --- Passenger Counter ---
            const decBtn = document.getElementById('passenger-dec');
            const incBtn = document.getElementById('passenger-inc');
            const countSpan = document.getElementById('passenger-count');

            if (decBtn && incBtn && countSpan) {
                let count = 1;
                decBtn.addEventListener('click', () => {
                    if (count > 1) {
                        count--;
                        countSpan.innerText = count;
                    }
                });
                incBtn.addEventListener('click', () => {
                    if (count < 10) {
                        count++;
                        countSpan.innerText = count;
                    }
                });
            }

            // --- Slider Scrolling ---
            const slider = document.getElementById('routes-slider');
            const prevBtn = document.getElementById('slider-prev');
            const nextBtn = document.getElementById('slider-next');

            if (slider && prevBtn && nextBtn) {
                prevBtn.addEventListener('click', () => {
                    slider.scrollLeft -= 320;
                });
                nextBtn.addEventListener('click', () => {
                    slider.scrollLeft += 320;
                });
            }

            // --- Heart Favorite Button Toggle ---
            document.querySelectorAll('.heart-btn').forEach(btn => {
                btn.addEventListener('click', (e) => {
                    e.preventDefault();
                    e.stopPropagation();
                    const svg = btn.querySelector('svg');

                    if (btn.classList.contains('text-white')) {
                        // Mark as favorite
                        btn.classList.remove('text-white', 'bg-white/20');
                        btn.classList.add('text-red-500', 'bg-white');
                        svg.setAttribute('fill', 'currentColor');
                    } else {
                        // Unmark as favorite
                        btn.classList.remove('text-red-500', 'bg-white');
                        btn.classList.add('text-white', 'bg-white/20');
                        svg.setAttribute('fill', 'none');
                    }
                });
            });

            // --- Promo Code Claims ---
            const claimBtns = document.querySelectorAll('.claim-promo-btn');
            const promoModal = document.getElementById('promo-modal');
            const promoModalContent = document.getElementById('promo-modal-content');
            const promoModalCode = document.getElementById('promo-modal-code');
            const closePromoBtn = document.getElementById('close-promo-btn');
            const copyPromoBtn = document.getElementById('copy-promo-btn');

            claimBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    const code = btn.getAttribute('data-code');
                    if (promoModal && promoModalCode) {
                        promoModalCode.innerText = code;
                        promoModal.classList.remove('hidden');
                        setTimeout(() => {
                            promoModalContent.classList.remove('scale-95');
                            promoModalContent.classList.add('scale-100');
                        }, 50);
                    }
                });
            });

            const closePromoModal = () => {
                if (promoModal) {
                    promoModalContent.classList.remove('scale-100');
                    promoModalContent.classList.add('scale-95');
                    setTimeout(() => {
                        promoModal.classList.add('hidden');
                        if (copyPromoBtn) {
                            copyPromoBtn.innerText = 'Sao chép';
                            copyPromoBtn.classList.remove('bg-emerald-600', 'hover:bg-emerald-700');
                            copyPromoBtn.classList.add('bg-blue-600', 'hover:bg-blue-700');
                        }
                    }, 150);
                }
            };

            if (closePromoBtn) closePromoBtn.addEventListener('click', closePromoModal);
            const promoOverlay = document.getElementById('promo-modal-overlay');
            if (promoOverlay) promoOverlay.addEventListener('click', closePromoModal);

            if (copyPromoBtn && promoModalCode) {
                copyPromoBtn.addEventListener('click', () => {
                    navigator.clipboard.writeText(promoModalCode.innerText).then(() => {
                        copyPromoBtn.innerText = 'Đã chép!';
                        copyPromoBtn.classList.remove('bg-blue-600', 'hover:bg-blue-700');
                        copyPromoBtn.classList.add('bg-emerald-600', 'hover:bg-emerald-700');
                    });
                });
            }

            // --- Form Submission / Search Result Modal ---
            const form = document.getElementById('search-booking-form');
            const searchModal = document.getElementById('search-modal');
            const searchModalContent = document.getElementById('search-modal-content');
            const searchModalRoute = document.getElementById('search-modal-route');
            const closeSearchBtn = document.getElementById('close-search-btn');

            if (form) {
                form.addEventListener('submit', (e) => {
                    e.preventDefault();

                    const pickup = pickupInput.value || 'Hà Nội';
                    const dropoff = dropoffInput.value || 'Hải Phòng';
                    const date = dateInput.value;
                    const passengers = countSpan ? countSpan.innerText : '1';

                    if (searchModal && searchModalRoute) {
                        searchModalRoute.innerText = `Chuyến xe từ ${pickup} đi ${dropoff} ngày ${date} (${passengers} người)`;
                        searchModal.classList.remove('hidden');
                        setTimeout(() => {
                            searchModalContent.classList.remove('scale-95');
                            searchModalContent.classList.add('scale-100');
                        }, 50);
                    }
                });
            }

            const closeSearchModal = () => {
                if (searchModal) {
                    searchModalContent.classList.remove('scale-100');
                    searchModalContent.classList.add('scale-95');
                    setTimeout(() => {
                        searchModal.classList.add('hidden');
                    }, 150);
                }
            };

            if (closeSearchBtn) closeSearchBtn.addEventListener('click', closeSearchModal);
            const searchOverlay = document.getElementById('search-modal-overlay');
            if (searchOverlay) searchOverlay.addEventListener('click', closeSearchModal);

        });
    </script>
@endsection