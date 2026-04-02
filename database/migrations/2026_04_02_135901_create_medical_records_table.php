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
        Schema::create('medical_records', function (Blueprint $table) {
            Schema::create('medical_record', function (Blueprint $table) {
                $table->uuid('id')->primary();

                $table->uuid('user_id');
                $table->foreign('user_id')->references('id')->on('users');

                $table->foreignId('rumah_sakit_id')
                    ->constrained('rumah_sakit');

                $table->string('dokter');
                $table->text('keluhan');
                $table->timestamp('created_at')->useCurrent();
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medical_records');
    }
};
