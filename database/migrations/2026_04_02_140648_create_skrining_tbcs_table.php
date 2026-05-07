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
        Schema::create('skrining_tbc', function (Blueprint $table) {

            $table->id();

            $table->uuid('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            //screening
            $table->integer('cough_duration');
            $table->boolean('fever');
            $table->boolean('weight_loss');
            $table->boolean('night_sweat');

            //result
            $table->string('screening_result');
            $table->string('risk_level');
            $table->integer('score');
            $table->timestamp('screening_date');

            $table->timestamp('updated_at');
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skrining_tbcs');
    }
};
