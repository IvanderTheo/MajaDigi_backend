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
        Schema::create('penerima_bansos', function (Blueprint $table) {

            $table->id();

            $table->uuid('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->foreignId('program_id')
                ->constrained('program_bansos');

            $table->decimal('amount', 15, 2);
            $table->string('status');

            $table->timestamp('received_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penerima_bansos');
    }
};
