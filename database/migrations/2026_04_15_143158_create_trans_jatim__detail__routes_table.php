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
        Schema::create('trans_jatim__detail__routes', function (Blueprint $table) {
            $table->id();
            $table->string('halte_name');
            $table->string('latitude');
            $table->string('longitude');

            $table->foreignId('transjatim_route_id')->constrained('transjatim_route');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trans_jatim__detail__routes');
    }
};
