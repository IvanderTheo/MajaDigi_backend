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
        Schema::create('transjatim_route', function (Blueprint $table) {

            $table->id();
            $table->string('route_name');
            $table->string('start_point');
            $table->string('end_point');
            $table->timestamp('updated_at');

            $table->decimal('ticket_price', 10, 2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transjatim_routes');
    }
};
