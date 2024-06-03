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
        Schema::create('tipoequipo', function (Blueprint $table) {
            $table->integer('IdTipoEquipo', true);
            $table->string('TipoEquipoDesc', 100);
            $table->string('Marca', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipoequipo');
    }
};
