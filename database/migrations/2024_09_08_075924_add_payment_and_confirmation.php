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
        Schema::table('flight_booking_details', function (Blueprint $table) {
            //
            $table->string('payment_status')->default('unpaid');
            $table->string('confirmation_status')->default('not-confirmed');
            $table->string('booking_name')->nullable()->default(NULL);
            $table->string('booking_emergency_contact')->nullable()->default(NULL);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('flight_booking_details', function (Blueprint $table) {
            //
        });
    }
};
