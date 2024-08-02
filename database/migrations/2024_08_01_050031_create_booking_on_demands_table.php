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
        Schema::create('booking_on_demands', function (Blueprint $table) {
            $table->id();
            $table->string("booking_id")->nullable();
            $table->date("arrival_date")->nullable();
            $table->date("return_date")->nullable();
            $table->string("service_type")->nullable();
            $table->string("booking_name")->nullable();
            $table->string("email_id")->nullable();
            $table->string("contact_number")->nullable();
            $table->string("destination_from")->nullable();
            $table->string("destination_to")->nullable();
            $table->integer("total_passanger")->nullable();
            $table->integer("adult_passanger")->nullable();
            $table->integer("child_passanger")->nullable();
            $table->integer("infant_passanger")->nullable();
            $table->string("pickup_location")->nullable();
            $table->string("booking_notes")->nullable();
            $table->string("status")->nullable();
            $table->string("status_message")->nullable();
            $table->string("transaction_ref_id")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking_on_demands');
    }
};
