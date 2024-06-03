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
        Schema::table('tracking', function (Blueprint $table) {
            $table->foreign(['IdServicio'], 'FK_Servicio_Tracking')->references(['IdServicio'])->on('servicio')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['IdTipoTracking'], 'tracking_ibfk_1')->references(['IdTipoTracking'])->on('tipotracking')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tracking', function (Blueprint $table) {
            $table->dropForeign('FK_Servicio_Tracking');
            $table->dropForeign('tracking_ibfk_1');
        });
    }
};
