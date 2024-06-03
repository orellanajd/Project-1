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
        Schema::create('persona', function (Blueprint $table) {
            $table->integer('IdPersona', true);
            $table->string('PrimerNombre', 50);
            $table->string('SegundoNombre', 50)->nullable();
            $table->string('PrimerApellido', 50);
            $table->string('SegundoApellido', 50);
            $table->dateTime('FechaNacimiento')->nullable();
            $table->char('Sexo', 1);
            $table->string('Direccion');
            $table->string('Telefono', 20);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persona');
    }
};
