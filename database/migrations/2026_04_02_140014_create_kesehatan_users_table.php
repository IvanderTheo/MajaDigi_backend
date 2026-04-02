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
        Schema::create('kesehatan_users', function (Blueprint $table) {
            Schema::create('kesehatan_user', function (Blueprint $table) {

                $table->uuid('id')->primary();

                $table->uuid('user_id');
                $table->foreign('user_id')->references('id')->on('users');

                $table->string('no_bpjs')->nullable();
                $table->string('blood_type')->nullable();
                $table->string('vaccination_status')->nullable();

                $table->uuid('medical_record_id')->nullable();
                $table->foreign('medical_record_id')
                    ->references('id')
                    ->on('medical_record');
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kesehatan_users');
    }
};
