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
        Schema::table('infoservicio', function (Blueprint $table) {
            $table->foreign(['IdServicio'], 'infoservicio_ibfk_1')->references(['IdServicio'])->on('servicio')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('infoservicio', function (Blueprint $table) {
            $table->dropForeign('infoservicio_ibfk_1');
        });
    }
};
