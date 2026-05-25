<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('operator_id')->constrained()->cascadeOnDelete();
            $table->string('license_plate', 20)->unique();
            $table->enum('type', ['sedan_4', 'suv_7', 'limousine_9', 'van_16', 'bus_29', 'bus_45']);
            $table->string('brand', 100)->nullable();
            $table->string('model', 100)->nullable();
            $table->smallInteger('year')->nullable();
            $table->tinyInteger('seat_count');
            $table->string('image', 500)->nullable();
            $table->enum('status', ['active', 'maintenance', 'inactive'])->default('active');
            $table->timestamps();

            $table->index('operator_id');
            $table->index('status');
        });

        Schema::create('vehicle_amenities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vehicle_id')->constrained()->cascadeOnDelete();
            $table->enum('amenity', ['wifi', 'charging', 'water', 'ac', 'usb', 'blanket', 'tv', 'snack']);
            $table->unique(['vehicle_id', 'amenity']);
        });

        Schema::create('seat_layouts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vehicle_id')->constrained()->cascadeOnDelete();
            $table->string('seat_code', 5);
            $table->string('row', 1);
            $table->tinyInteger('col');
            $table->enum('seat_type', ['standard', 'vip'])->default('standard');
            $table->boolean('is_active')->default(true);
            $table->unique(['vehicle_id', 'seat_code']);

            $table->index('vehicle_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('seat_layouts');
        Schema::dropIfExists('vehicle_amenities');
        Schema::dropIfExists('vehicles');
    }
};
