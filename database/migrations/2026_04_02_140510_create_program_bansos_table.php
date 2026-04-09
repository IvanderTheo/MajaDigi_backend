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
        Schema::create('program_bansos', function (Blueprint $table) {

            $table->id();
            $table->string('name');
            $table->text('description');

            $table->decimal('total_fund', 15, 2);
            $table->integer('quota_total');
            $table->integer('quota_distributed');

            $table->decimal('percentage', 5, 2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('program_bansos');
    }
};
