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
        Schema::create('passengers', function (Blueprint $table) {

        $table->string('first_name')  ;
        $table->string('middle_name')  ;
        $table->string('last_name')  ;
        $table->string('gender')  ;
        $table->date('date_of_birth')->nullablke();
        $table->string('salutation')->nullable()  ;
        $table->string('phone')->nullable()  ;
        $table->string('email')->nullable()  ;
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('passengers');
    }
};