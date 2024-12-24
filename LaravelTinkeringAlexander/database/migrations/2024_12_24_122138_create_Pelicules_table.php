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
        Schema::create('Pelicules', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->text('Titol')->nullable();
            $table->integer('Any')->nullable();
            $table->text('Genere')->nullable();
            $table->text('Sinopsis')->nullable();
            $table->text('Director')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Pelicules');
    }
};
