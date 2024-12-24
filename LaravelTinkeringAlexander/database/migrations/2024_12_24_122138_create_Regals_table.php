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
        Schema::create('Regals', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->text('nom')->nullable();
            $table->integer('edad')->nullable();
            $table->text('solicitud')->nullable();
            $table->text('comportament')->nullable();
            $table->text('address')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Regals');
    }
};
