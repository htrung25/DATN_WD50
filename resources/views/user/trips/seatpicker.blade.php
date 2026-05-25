@extends('user.layouts.partials.app')

@section('title', 'Chọn Ghế - Xe Ghép Pro')

@section('styles')
<style>
    /* Seat button base */
    .seat-btn {
        width: 48px;
        height: 48px;
        border-radius: 10px;
        font-size: 13px;
        font-weight: 700;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.2s ease;
        border: 2px solid transparent;
        position: relative;
    }

    /* Available seat */
    .seat-btn.available {
        background-color: #ffffff;
        border-color: #3b82f6;
        color: #3b82f6;
    }
    .seat-btn.available:hover {
        background-color: #eff6ff;
        border-color: #2563eb;
        transform: scale(1.05);
    }

    /* Booked seat */
    .seat-btn.booked {
        background-color: #e2e8f0;
        border-color: #e2e8f0;
        color: #94a3b8;
        cursor: not-allowed;
    }

    /* Selected seat */
    .seat-btn.selected {
        background-color: #3b82f6;
        border-color: #3b82f6;
        color: #ffffff;
        box-shadow: 0 2px 8px rgba(59, 130, 246, 0.35);
    }
    .seat-btn.selected:hover {
        background-color: #2563eb;
        border-color: #2563eb;
    }

    /* Steering wheel area */
    .steering-area {
        width: 48px;
        height: 48px;
        border-radius: 10px;
        background-color: #f1f5f9;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #94a3b8;
    }

    /* Seat map container */
    .seat-map-container {
        background: linear-gradient(135deg, #f0f4ff 0%, #e8edf5 100%);
        border-radius: 24px;
        padding: 28px 24px;
        position: relative;
    }

    /* Timeline dot connector */
    .timeline-line {
        position: absolute;
        left: 7px;
        top: 24px;
        bottom: 0;
        width: 2px;
        border-left: 2px dashed #cbd5e1;
    }
</style>
@endsection

@section('content')
<main class="flex-grow bg-slate-50 py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Page Header -->
        <div class="flex items-center gap-4 mb-8">
            <a href="{{ route('search') }}" class="w-10 h-10 rounded-full bg-white border border-slate-200 flex items-center justify-center text-slate-500 hover:text-blue-600 hover:border-blue-300 transition-all shadow-sm">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"></path>
                </svg>
            </a>
            <h1 class="text-xl md:text-2xl font-extrabold text-slate-800 tracking-tight">Chi tiết chuyến xe & Chọn ghế</h1>
        </div>

        <!-- Main Content Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">

            <!-- Left Column: Seat Map -->
            <div class="lg:col-span-5">
                <div class="bg-white rounded-3xl border border-slate-100 shadow-sm p-6 md:p-8">
                    <!-- Seat Map Header -->
                    <div class="flex items-center justify-between mb-6">
                        <h2 class="text-base font-bold text-slate-800">Sơ đồ ghế ngồi</h2>
                        <div class="flex items-center gap-4 text-xs">
                            <div class="flex items-center gap-1.5">
                                <span class="w-4 h-4 rounded border-2 border-blue-500 bg-white"></span>
                                <span class="text-slate-500 font-medium">Trống</span>
                            </div>
                            <div class="flex items-center gap-1.5">
                                <span class="w-4 h-4 rounded bg-slate-200"></span>
                                <span class="text-slate-500 font-medium">Đã đặt</span>
                            </div>
                            <div class="flex items-center gap-1.5">
                                <span class="w-4 h-4 rounded bg-blue-500"></span>
                                <span class="text-slate-500 font-medium">Đang chọn</span>
                            </div>
                        </div>
                    </div>

                    <!-- Seat Map Grid -->
                    <div class="seat-map-container">
                        <!-- Row 0: Driver -->
                        <div class="flex items-center justify-end mb-5 pr-1">
                            <div class="steering-area">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 14c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm0-6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8V6M12 18v-2M6 12H4m16 0h-2"></path>
                                </svg>
                            </div>
                        </div>

                        <!-- Row A -->
                        <div class="flex items-center gap-3 mb-3">
                            <button type="button" class="seat-btn available" data-seat="A1" data-price="250000" onclick="toggleSeat(this)">A1</button>
                            <button type="button" class="seat-btn booked" data-seat="A2" disabled>A2</button>
                            <div class="w-6"></div>
                            <button type="button" class="seat-btn available" data-seat="A3" data-price="250000" onclick="toggleSeat(this)">A3</button>
                            <button type="button" class="seat-btn available" data-seat="A4" data-price="250000" onclick="toggleSeat(this)">A4</button>
                        </div>

                        <!-- Row B -->
                        <div class="flex items-center gap-3 mb-3">
                            <button type="button" class="seat-btn available" data-seat="B1" data-price="250000" onclick="toggleSeat(this)">B1</button>
                            <button type="button" class="seat-btn available" data-seat="B2" data-price="250000" onclick="toggleSeat(this)">B2</button>
                            <div class="w-6"></div>
                            <button type="button" class="seat-btn booked" data-seat="B3" disabled>B3</button>
                            <button type="button" class="seat-btn available" data-seat="B4" data-price="250000" onclick="toggleSeat(this)">B4</button>
                        </div>

                        <!-- Row C -->
                        <div class="flex items-center gap-3 mb-3">
                            <button type="button" class="seat-btn available" data-seat="C1" data-price="250000" onclick="toggleSeat(this)">C1</button>
                            <button type="button" class="seat-btn available" data-seat="C2" data-price="250000" onclick="toggleSeat(this)">C2</button>
                            <div class="w-6"></div>
                            <button type="button" class="seat-btn available" data-seat="C3" data-price="250000" onclick="toggleSeat(this)">C3</button>
                            <button type="button" class="seat-btn available" data-seat="C4" data-price="250000" onclick="toggleSeat(this)">C4</button>
                        </div>

                        <!-- Row D -->
                        <div class="flex items-center gap-3 mb-3">
                            <button type="button" class="seat-btn available" data-seat="D1" data-price="250000" onclick="toggleSeat(this)">D1</button>
                            <button type="button" class="seat-btn available" data-seat="D2" data-price="250000" onclick="toggleSeat(this)">D2</button>
                            <div class="w-6"></div>
                            <button type="button" class="seat-btn available" data-seat="D3" data-price="250000" onclick="toggleSeat(this)">D3</button>
                            <button type="button" class="seat-btn booked" data-seat="D4" disabled>D4</button>
                        </div>

                        <!-- Row E (back row - 5 seats) -->
                        <div class="flex items-center gap-3">
                            <button type="button" class="seat-btn available" data-seat="E1" data-price="250000" onclick="toggleSeat(this)">E1</button>
                            <button type="button" class="seat-btn available" data-seat="E2" data-price="250000" onclick="toggleSeat(this)">E2</button>
                            <button type="button" class="seat-btn available" data-seat="E3" data-price="250000" onclick="toggleSeat(this)">E3</button>
                            <button type="button" class="seat-btn available" data-seat="E4" data-price="250000" onclick="toggleSeat(this)">E4</button>
                            <button type="button" class="seat-btn available" data-seat="E5" data-price="250000" onclick="toggleSeat(this)">E5</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Trip Details & Booking -->
            <div class="lg:col-span-7 space-y-6">

                <!-- Trip Info Card -->
                <div class="bg-white rounded-3xl border border-slate-100 shadow-sm p-6 md:p-8">
                    <!-- Header -->
                    <div class="flex items-start justify-between mb-6">
                        <div>
                            <h3 class="text-lg font-bold text-slate-800 mb-1.5">Hoàng Long Limousine</h3>
                            <div class="flex items-center gap-3 flex-wrap">
                                <span class="inline-flex items-center gap-1 bg-blue-600 text-white font-bold text-[10px] tracking-wider uppercase px-2.5 py-1 rounded-lg">
                                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M6.267 3.455a.75.75 0 00-.708.522L4.547 7.25h10.906l-1.012-3.273a.75.75 0 00-.708-.522H6.267zm9.645 5.295a1.5 1.5 0 011.088 1.43v5.57a1.5 1.5 0 01-1.5 1.5h-11a1.5 1.5 0 01-1.5-1.5v-5.57a1.5 1.5 0 011.088-1.43l1.047-3.393A2.25 2.25 0 016.267 2h7.466a2.25 2.25 0 012.125 1.547l1.054 3.408zM5.75 11a.75.75 0 100 1.5.75.75 0 000-1.5zm8.5 0a.75.75 0 100 1.5.75.75 0 000-1.5z" clip-rule="evenodd"></path></svg>
                                    Đã xác minh
                                </span>
                                <span class="text-sm text-slate-500 font-medium">Biển số: <span class="font-bold text-slate-700">29B-123.45</span></span>
                            </div>
                        </div>
                        <div class="text-right shrink-0">
                            <span class="text-2xl font-black text-blue-600 block leading-tight">250.000đ</span>
                            <span class="text-[11px] font-semibold text-slate-400 uppercase tracking-wide">mỗi ghế</span>
                        </div>
                    </div>

                    <!-- Amenities -->
                    <div class="flex items-center gap-6 flex-wrap py-5 border-t border-b border-slate-100 mb-6">
                        <div class="flex flex-col items-center gap-1.5 text-center">
                            <span class="w-10 h-10 rounded-full bg-slate-50 flex items-center justify-center text-blue-500">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071a9 9 0 0112.728 0M1.22 9.607a14 14 0 0119.56 0"></path></svg>
                            </span>
                            <span class="text-[11px] font-semibold text-slate-500">Wifi Free</span>
                        </div>
                        <div class="flex flex-col items-center gap-1.5 text-center">
                            <span class="w-10 h-10 rounded-full bg-slate-50 flex items-center justify-center text-blue-500">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 9.172V5L8 4z"></path></svg>
                            </span>
                            <span class="text-[11px] font-semibold text-slate-500">Nước uống</span>
                        </div>
                        <div class="flex flex-col items-center gap-1.5 text-center">
                            <span class="w-10 h-10 rounded-full bg-slate-50 flex items-center justify-center text-blue-500">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707m0-12.728l.707.707m11.314 11.314l.707-.707M12 5a7 7 0 100 14 7 7 0 000-14z"></path></svg>
                            </span>
                            <span class="text-[11px] font-semibold text-slate-500">Điều hòa</span>
                        </div>
                        <div class="flex flex-col items-center gap-1.5 text-center">
                            <span class="w-10 h-10 rounded-full bg-slate-50 flex items-center justify-center text-blue-500">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                            </span>
                            <span class="text-[11px] font-semibold text-slate-500">Sạc USB</span>
                        </div>
                    </div>

                    <!-- Route Timeline -->
                    <div class="space-y-0">
                        <!-- Departure -->
                        <div class="flex items-start gap-4 relative pb-8">
                            <div class="relative z-10 flex flex-col items-center">
                                <span class="w-[16px] h-[16px] rounded-full border-[3px] border-blue-500 bg-white"></span>
                                <div class="w-[2px] h-full border-l-2 border-dashed border-slate-300 absolute top-4"></div>
                            </div>
                            <div>
                                <span class="text-sm font-extrabold text-slate-800">08:00 • Hà Nội</span>
                                <span class="text-xs text-slate-400 block mt-0.5 font-medium">Bến xe Mỹ Đình, Cổng số 2</span>
                            </div>
                        </div>

                        <!-- Arrival -->
                        <div class="flex items-start gap-4 relative">
                            <div class="relative z-10 flex flex-col items-center">
                                <span class="w-[16px] h-[16px] rounded-full border-[3px] border-blue-500 bg-blue-500"></span>
                            </div>
                            <div>
                                <span class="text-sm font-extrabold text-slate-800">10:30 • Hải Phòng</span>
                                <span class="text-xs text-slate-400 block mt-0.5 font-medium">Văn phòng 12 Lạch Tray</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Cancellation Policy Card -->
                <div class="bg-white rounded-3xl border border-slate-100 shadow-sm p-6 md:p-8">
                    <h3 class="text-base font-bold text-slate-800 mb-5">Chính sách hủy chuyến</h3>
                    <div class="space-y-3.5">
                        <div class="flex items-center gap-3">
                            <span class="w-5 h-5 rounded-full bg-emerald-50 flex items-center justify-center shrink-0">
                                <svg class="w-3 h-3 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            </span>
                            <span class="text-sm text-slate-600 font-medium">Hủy trước 24h: <span class="font-bold text-emerald-600">Hoàn tiền 100%</span></span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="w-5 h-5 rounded-full bg-amber-50 flex items-center justify-center shrink-0">
                                <svg class="w-3 h-3 text-amber-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                            </span>
                            <span class="text-sm text-slate-600 font-medium">Hủy từ 12h-24h: <span class="font-bold text-amber-600">Hoàn tiền 50%</span></span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="w-5 h-5 rounded-full bg-red-50 flex items-center justify-center shrink-0">
                                <svg class="w-3 h-3 text-red-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </span>
                            <span class="text-sm text-slate-600 font-medium">Hủy dưới 12h: <span class="font-bold text-red-500">Không hoàn tiền</span></span>
                        </div>
                    </div>
                </div>

                <!-- Booking Summary (Sticky on mobile) -->
                <div class="bg-gradient-to-r from-blue-600 to-indigo-700 rounded-3xl shadow-lg shadow-blue-500/20 p-6 md:p-8 text-white lg:sticky lg:bottom-6" id="booking-summary">
                    <div class="flex items-center justify-between mb-5">
                        <div>
                            <span class="text-[10px] font-bold uppercase tracking-widest text-blue-200 block mb-1">Tạm tính</span>
                            <p class="text-sm font-semibold text-blue-100" id="summary-seats-text">Chưa chọn ghế</p>
                        </div>
                        <span class="text-3xl font-black tracking-tight" id="summary-total-price">0đ</span>
                    </div>

                    <button type="button" class="w-full bg-white/20 hover:bg-white/30 active:bg-white/10 backdrop-blur-sm text-white font-bold text-sm py-4 rounded-2xl transition-all duration-200 border border-white/20 cursor-pointer disabled:opacity-50 disabled:cursor-not-allowed" id="btn-book" disabled>
                        Tiến hành đặt chỗ
                    </button>
                </div>

            </div>
        </div>

    </div>
</main>
@endsection

@section('scripts')
<script>
    const PRICE_PER_SEAT = 250000;
    const selectedSeats = new Set();

    function toggleSeat(btn) {
        const seatId = btn.dataset.seat;

        if (btn.classList.contains('booked')) return;

        if (btn.classList.contains('selected')) {
            // Deselect
            btn.classList.remove('selected');
            btn.classList.add('available');
            selectedSeats.delete(seatId);
        } else {
            // Select
            btn.classList.remove('available');
            btn.classList.add('selected');
            selectedSeats.add(seatId);
        }

        updateSummary();
    }

    function updateSummary() {
        const count = selectedSeats.size;
        const total = count * PRICE_PER_SEAT;

        const seatsTextEl = document.getElementById('summary-seats-text');
        const totalPriceEl = document.getElementById('summary-total-price');
        const bookBtn = document.getElementById('btn-book');

        if (count === 0) {
            seatsTextEl.textContent = 'Chưa chọn ghế';
            totalPriceEl.textContent = '0đ';
            bookBtn.disabled = true;
        } else {
            const seatNames = Array.from(selectedSeats).sort().join(', ');
            seatsTextEl.textContent = `Ghế ${seatNames} (${count} ghế)`;
            totalPriceEl.textContent = total.toLocaleString('vi-VN') + 'đ';
            bookBtn.disabled = false;
        }
    }
</script>
@endsection
