<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('routes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('operator_id')->constrained()->cascadeOnDelete();
            $table->string('name', 255);
            $table->string('origin_city', 100);
            $table->string('destination_city', 100);
            $table->decimal('distance_km', 7, 2)->nullable();
            $table->unsignedInteger('estimated_duration_minutes');
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();

            $table->index('operator_id');
            $table->index(['origin_city', 'destination_city']);
            $table->index('status');
        });

        Schema::create('route_stops', function (Blueprint $table) {
            $table->id();
            $table->foreignId('route_id')->constrained()->cascadeOnDelete();
            $table->string('name', 255);
            $table->text('address')->nullable();
            $table->decimal('latitude', 10, 7)->nullable();
            $table->decimal('longitude', 10, 7)->nullable();
            $table->tinyInteger('stop_order');
            $table->unsignedInteger('minutes_from_start')->default(0);
            $table->timestamps();

            $table->index('route_id');
        });

        Schema::create('trip_schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('route_id')->constrained()->cascadeOnDelete();
            $table->foreignId('vehicle_id')->constrained()->cascadeOnDelete();
            $table->time('departure_time');
            $table->json('days_of_week');
            $table->decimal('price_per_seat', 12, 2);
            $table->boolean('is_active')->default(true);
            $table->timestamps();

            $table->index('route_id');
        });

        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->foreignId('route_id')->constrained()->cascadeOnDelete();
            $table->foreignId('schedule_id')->nullable()->constrained('trip_schedules')->nullOnDelete();
            $table->foreignId('vehicle_id')->constrained()->cascadeOnDelete();
            $table->foreignId('driver_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('operator_id')->constrained()->cascadeOnDelete();
            $table->dateTime('departure_time');
            $table->dateTime('arrival_time')->nullable();
            $table->decimal('price_per_seat', 12, 2);
            $table->tinyInteger('available_seats');
            $table->enum('status', ['scheduled', 'boarding', 'in_progress', 'completed', 'cancelled'])->default('scheduled');
            $table->text('notes')->nullable();
            $table->timestamps();

            $table->index('route_id');
            $table->index('driver_id');
            $table->index('operator_id');
            $table->index('status');
            $table->index('departure_time');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('trips');
        Schema::dropIfExists('trip_schedules');
        Schema::dropIfExists('route_stops');
        Schema::dropIfExists('routes');
    }
};
