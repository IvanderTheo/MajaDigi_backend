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
        Schema::create('antrian_pasien', function (Blueprint $table) {

            $table->id();

            $table->uuid('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->foreignId('rs_id')
                ->constrained('rumah_sakit');

            $table->integer('queue_number');
            $table->string('service_type');

            $table->timestamp('queue_date');
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('antrian_pasiens');
    }
};
