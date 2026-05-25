<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('booking_code', 20)->unique();
            $table->foreignId('trip_id')->constrained()->cascadeOnDelete();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('pickup_stop_id')->nullable()->constrained('route_stops')->nullOnDelete();
            $table->foreignId('dropoff_stop_id')->nullable()->constrained('route_stops')->nullOnDelete();
            $table->decimal('total_amount', 12, 2);
            $table->decimal('discount_amount', 12, 2)->default(0);
            $table->decimal('final_amount', 12, 2);
            $table->tinyInteger('passenger_count')->default(1);
            $table->enum('status', ['pending', 'confirmed', 'completed', 'cancelled', 'refunded'])->default('pending');
            $table->enum('payment_status', ['unpaid', 'paid', 'refunded', 'partial_refund'])->default('unpaid');
            $table->timestamp('booked_at')->useCurrent();
            $table->timestamp('cancelled_at')->nullable();
            $table->text('cancellation_reason')->nullable();
            $table->timestamps();

            $table->index('trip_id');
            $table->index('user_id');
            $table->index('status');
            $table->index('payment_status');
            $table->index('booked_at');
        });

        Schema::create('booking_seats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booking_id')->constrained()->cascadeOnDelete();
            $table->foreignId('seat_layout_id')->constrained()->cascadeOnDelete();
            $table->string('seat_code', 5);
            $table->string('passenger_name', 255)->nullable();
            $table->string('passenger_phone', 20)->nullable();
            $table->decimal('price', 12, 2);
            $table->unique(['booking_id', 'seat_layout_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('booking_seats');
        Schema::dropIfExists('bookings');
    }
};
