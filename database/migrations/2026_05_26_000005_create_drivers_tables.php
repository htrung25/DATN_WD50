<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unique()->constrained()->cascadeOnDelete();
            $table->foreignId('operator_id')->nullable()->constrained()->nullOnDelete();
            $table->string('license_number', 50);
            $table->date('license_expiry');
            $table->string('id_card_number', 20);
            $table->decimal('rating_avg', 3, 2)->default(0);
            $table->unsignedInteger('total_trips')->default(0);
            $table->enum('status', ['pending', 'approved', 'rejected', 'suspended'])->default('pending');
            $table->timestamp('verified_at')->nullable();
            $table->timestamps();

            $table->index('operator_id');
            $table->index('status');
        });

        Schema::create('driver_documents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('driver_id')->constrained()->cascadeOnDelete();
            $table->enum('type', ['license', 'id_card', 'avatar', 'vehicle_registration']);
            $table->string('file_path', 500);
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->text('note')->nullable();
            $table->timestamp('verified_at')->nullable();
            $table->timestamps();

            $table->index('driver_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('driver_documents');
        Schema::dropIfExists('drivers');
    }
};
