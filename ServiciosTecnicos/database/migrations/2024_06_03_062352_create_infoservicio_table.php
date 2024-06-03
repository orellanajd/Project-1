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
        Schema::create('infoservicio', function (Blueprint $table) {
            $table->integer('IdInfoServicio', true);
            $table->integer('IdServicio')->nullable()->index('idservicio');
            $table->string('Solucion');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infoservicio');
    }
};
