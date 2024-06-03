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
        Schema::table('servicio', function (Blueprint $table) {
            $table->foreign(['IdCliente'], 'servicio_ibfk_1')->references(['IdCliente'])->on('cliente')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['IdEmpleado'], 'servicio_ibfk_2')->references(['IdEmpleado'])->on('empleado')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['IdEquipo'], 'servicio_ibfk_3')->references(['IdEquipo'])->on('equipo')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('servicio', function (Blueprint $table) {
            $table->dropForeign('servicio_ibfk_1');
            $table->dropForeign('servicio_ibfk_2');
            $table->dropForeign('servicio_ibfk_3');
        });
    }
};
