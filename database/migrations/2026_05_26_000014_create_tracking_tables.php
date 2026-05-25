<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('trip_trackings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('trip_id')->constrained()->cascadeOnDelete();
            $table->decimal('latitude', 10, 7);
            $table->decimal('longitude', 10, 7);
            $table->decimal('speed', 5, 2)->nullable();
            $table->smallInteger('heading')->nullable();
            $table->timestamp('recorded_at')->useCurrent();

            $table->index('trip_id');
            $table->index('recorded_at');
        });

        Schema::create('trip_incidents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('trip_id')->constrained()->cascadeOnDelete();
            $table->foreignId('driver_id')->constrained()->cascadeOnDelete();
            $table->enum('type', ['accident', 'breakdown', 'delay', 'road_block', 'other']);
            $table->text('description')->nullable();
            $table->decimal('latitude', 10, 7)->nullable();
            $table->decimal('longitude', 10, 7)->nullable();
            $table->timestamp('reported_at')->useCurrent();
            $table->timestamp('resolved_at')->nullable();
            $table->timestamps();

            $table->index('trip_id');
        });

        Schema::create('trip_shares', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booking_id')->constrained()->cascadeOnDelete();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('share_token', 100)->unique();
            $table->string('shared_with_name', 255)->nullable();
            $table->string('shared_with_phone', 20)->nullable();
            $table->timestamp('expires_at')->nullable();
            $table->timestamps();

            $table->index('user_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('trip_shares');
        Schema::dropIfExists('trip_incidents');
        Schema::dropIfExists('trip_trackings');
    }
};
