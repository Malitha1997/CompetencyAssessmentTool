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
        Schema::create('deep_securities', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('td19');
            $table->string('td20');
            $table->string('td21');
            $table->string('td22');
            $table->foreignId('govofficial_id')->constrained('govofficials')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deep_securities');
    }
};
