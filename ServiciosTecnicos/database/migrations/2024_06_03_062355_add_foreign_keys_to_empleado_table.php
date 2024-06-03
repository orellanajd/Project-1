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
        Schema::table('empleado', function (Blueprint $table) {
            $table->foreign(['IdPersona'], 'empleado_ibfk_1')->references(['IdPersona'])->on('persona')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['IdTipoEmpleado'], 'empleado_ibfk_2')->references(['IdTipoEmpleado'])->on('tipoempleado')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('empleado', function (Blueprint $table) {
            $table->dropForeign('empleado_ibfk_1');
            $table->dropForeign('empleado_ibfk_2');
        });
    }
};
