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
        Schema::create('tracking', function (Blueprint $table) {
            $table->integer('IdTracking', true);
            $table->integer('IdServicio')->nullable()->index('fk_servicio_tracking');
            $table->integer('IdTipoTracking')->nullable()->index('idtipotracking');
            $table->dateTime('Fecha');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tracking');
    }
};
