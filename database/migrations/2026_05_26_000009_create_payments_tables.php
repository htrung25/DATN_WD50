<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booking_id')->constrained()->cascadeOnDelete();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->decimal('amount', 12, 2);
            $table->enum('method', ['momo', 'zalopay', 'vnpay', 'visa', 'mastercard', 'atm', 'wallet', 'cash']);
            $table->string('transaction_id', 255)->nullable();
            $table->enum('status', ['pending', 'completed', 'failed', 'refunded'])->default('pending');
            $table->timestamp('paid_at')->nullable();
            $table->json('metadata')->nullable();
            $table->timestamps();

            $table->index('booking_id');
            $table->index('user_id');
            $table->index('status');
        });

        Schema::create('refunds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('payment_id')->constrained()->cascadeOnDelete();
            $table->foreignId('booking_id')->constrained()->cascadeOnDelete();
            $table->decimal('amount', 12, 2);
            $table->text('reason')->nullable();
            $table->tinyInteger('refund_percentage');
            $table->enum('status', ['pending', 'completed', 'rejected'])->default('pending');
            $table->timestamp('refunded_at')->nullable();
            $table->timestamps();

            $table->index('booking_id');
            $table->index('status');
        });

        Schema::create('payment_methods', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->enum('type', ['card', 'bank']);
            $table->string('card_last4', 4)->nullable();
            $table->string('card_brand', 20)->nullable();
            $table->string('bank_name', 100)->nullable();
            $table->boolean('is_default')->default(false);
            $table->timestamps();

            $table->index('user_id');
        });

        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booking_id')->constrained()->cascadeOnDelete();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('invoice_number', 50)->unique();
            $table->string('company_name', 255)->nullable();
            $table->string('tax_code', 50)->nullable();
            $table->text('address')->nullable();
            $table->decimal('amount', 12, 2);
            $table->decimal('tax_amount', 12, 2)->default(0);
            $table->decimal('total', 12, 2);
            $table->string('file_path', 500)->nullable();
            $table->timestamp('issued_at');
            $table->timestamps();

            $table->index('booking_id');
            $table->index('user_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('invoices');
        Schema::dropIfExists('payment_methods');
        Schema::dropIfExists('refunds');
        Schema::dropIfExists('payments');
    }
};
