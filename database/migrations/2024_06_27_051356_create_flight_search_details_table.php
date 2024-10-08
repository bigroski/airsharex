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
        Schema::create('flight_search_details', function (Blueprint $table) {
            $table->id();
            $table->string("trip_id");
            $table->string("search_master_id");
            $table->string("queue_date");
            $table->integer('requested_seats');
            $table->json("data");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flight_search_details');
    }
};
