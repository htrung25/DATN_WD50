<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('operator_id')->nullable()->constrained()->nullOnDelete();
            $table->string('code', 50)->unique();
            $table->string('name', 255);
            $table->enum('type', ['percentage', 'fixed']);
            $table->decimal('value', 12, 2);
            $table->decimal('min_order_amount', 12, 2)->default(0);
            $table->decimal('max_discount', 12, 2)->nullable();
            $table->unsignedInteger('usage_limit')->nullable();
            $table->unsignedInteger('usage_per_user')->default(1);
            $table->unsignedInteger('used_count')->default(0);
            $table->timestamp('starts_at')->nullable();
            $table->timestamp('expires_at')->nullable();
            $table->enum('status', ['active', 'inactive', 'expired'])->default('active');
            $table->foreignId('created_by')->constrained('users')->cascadeOnDelete();
            $table->timestamps();

            $table->index('code');
            $table->index('status');
            $table->index('expires_at');
        });

        Schema::create('coupon_usages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('coupon_id')->constrained()->cascadeOnDelete();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('booking_id')->constrained()->cascadeOnDelete();
            $table->decimal('discount_amount', 12, 2);
            $table->timestamp('used_at')->useCurrent();

            $table->index('coupon_id');
            $table->index('user_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('coupon_usages');
        Schema::dropIfExists('coupons');
    }
};
