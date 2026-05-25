<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('commissions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('operator_id')->constrained()->cascadeOnDelete();
            $table->decimal('rate', 5, 2);
            $table->enum('type', ['platform_fee', 'service_fee']);
            $table->date('effective_from');
            $table->date('effective_to')->nullable();
            $table->timestamps();

            $table->index('operator_id');
        });

        Schema::create('driver_earnings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('driver_id')->constrained()->cascadeOnDelete();
            $table->foreignId('trip_id')->constrained()->cascadeOnDelete();
            $table->decimal('gross_amount', 12, 2);
            $table->decimal('commission_amount', 12, 2);
            $table->decimal('bonus_amount', 12, 2)->default(0);
            $table->decimal('net_amount', 12, 2);
            $table->enum('status', ['pending', 'paid'])->default('pending');
            $table->timestamp('paid_at')->nullable();
            $table->timestamps();

            $table->index('driver_id');
            $table->index('status');
        });

        Schema::create('operator_settlements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('operator_id')->constrained()->cascadeOnDelete();
            $table->date('period_start');
            $table->date('period_end');
            $table->decimal('total_revenue', 14, 2);
            $table->unsignedInteger('total_bookings');
            $table->decimal('commission_amount', 14, 2);
            $table->decimal('net_amount', 14, 2);
            $table->enum('status', ['pending', 'paid', 'overdue'])->default('pending');
            $table->timestamp('settled_at')->nullable();
            $table->timestamps();

            $table->index('operator_id');
            $table->index('status');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('operator_settlements');
        Schema::dropIfExists('driver_earnings');
        Schema::dropIfExists('commissions');
    }
};
