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
        Schema::create('reasons', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->timestamps();
        });

        Schema::table('request_details', function (Blueprint $table) {
            $table->string('codeId')->after('id');
            $table->foreignId('reason_id')->after('codeId')->constrained()->cascadeOnUpdate();
        });

        Schema::table('retirements', function (Blueprint $table) {
            $table->string('codeId')->after('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reasons');
    }
};
