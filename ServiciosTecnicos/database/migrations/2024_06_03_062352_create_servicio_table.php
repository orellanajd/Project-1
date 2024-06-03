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
        Schema::create('servicio', function (Blueprint $table) {
            $table->integer('IdServicio', true);
            $table->integer('IdCliente')->nullable()->index('idcliente');
            $table->integer('IdEmpleado')->nullable()->index('idempleado');
            $table->integer('IdEquipo')->nullable()->index('idequipo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicio');
    }
};
