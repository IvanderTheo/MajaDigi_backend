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
        Schema::create('kamar_rs', function (Blueprint $table) {

            $table->id();

            $table->foreignId('rs_id')
                ->constrained('rumah_sakit');

            $table->string('room_type');
            $table->integer('total_rooms');
            $table->integer('available_rooms');

            $table->timestamp('last_updated')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kamar_rumah_sakits');
    }
};
