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
        Schema::create('management', function (Blueprint $table) {
            $table->id();
            $table->foreignId('current_role_id')->constrained('roles', 'id')->cascadeOnUpdate();
            $table->foreignId('lower_role_id')->nullable()->constrained('roles', 'id')->cascadeOnUpdate();
            $table->foreignId('upper_role_id')->nullable()->constrained('roles', 'id')->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('management');
    }
};
