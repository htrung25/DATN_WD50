<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('operators', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unique()->constrained()->cascadeOnDelete();
            $table->string('company_name', 255);
            $table->string('business_license', 100)->nullable();
            $table->string('tax_code', 50)->nullable();
            $table->string('logo', 500)->nullable();
            $table->text('description')->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('email', 255)->nullable();
            $table->text('address')->nullable();
            $table->decimal('rating_avg', 3, 2)->default(0);
            $table->enum('status', ['pending', 'approved', 'rejected', 'suspended'])->default('pending');
            $table->timestamp('verified_at')->nullable();
            $table->timestamps();
        });

        Schema::create('operator_documents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('operator_id')->constrained()->cascadeOnDelete();
            $table->enum('type', ['business_license', 'tax_cert', 'vehicle_list', 'other']);
            $table->string('file_path', 500);
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->text('note')->nullable();
            $table->timestamp('verified_at')->nullable();
            $table->timestamps();

            $table->index('operator_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('operator_documents');
        Schema::dropIfExists('operators');
    }
};
