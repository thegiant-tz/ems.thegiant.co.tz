<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('appovals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('request_detail_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Approver's ID
            $table->enum('status', ['Pending', 'Rejected', 'Approved'])->default('Pending');
            $table->text('remarks')->nullable(); // Optional comments from the approver
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appovals');
    }
};
