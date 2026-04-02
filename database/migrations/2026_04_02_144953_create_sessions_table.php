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
        Schema::create('sessions', function (Blueprint $user_id) {
            $user_id->string('id')->primary();
            $user_id->foreignId('user_id')->nullable()->index();
            $user_id->string('ip_address', 45)->nullable();
            $user_id->text('user_agent')->nullable();
            $user_id->longText('payload');
            $user_id->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sessions');
    }
};