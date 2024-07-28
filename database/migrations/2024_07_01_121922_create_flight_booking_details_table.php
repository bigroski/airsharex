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
        Schema::create('flight_booking_details', function (Blueprint $table) {
            $table->id();
            $table->string("trip_id");
            $table->string("booking_reference_id")->nullable();
            $table->string("search_master_id");
            $table->string("payment_method");
            $table->unsignedBigInteger("customer_id");
            $table->string("payment_ref_id")->nullable();
            $table->date("flight_date")->nullable();
            $table->integer('requested_seats')->nullable();
            $table->json("flight_data")->nullable();
            $table->timestamps();

          
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flight_booking_details');
    }
};
