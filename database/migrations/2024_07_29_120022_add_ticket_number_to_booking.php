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
            $table->text('ticket_number')->nullable()->default(NULL);
            $table->text('total_seats')->nullable()->default(NULL);
            $table->text('total_amount')->nullable()->default(NULL);
            $table->string('payment_method')->nullable()->default(NULL)->change();
            $table->string('search_master_id')->nullable()->default(NULL)->change();
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