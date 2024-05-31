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

        Schema::create('airports', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('country_id')->unsigned()->index()->nullable();
            $table->string('name');
            $table->string('location')->nullable();
            $table->string('IATA_code')->unique()->nullable();
            $table->string('ICAO_code')->nullable();
            $table->string('terminal')->nullable();
            $table->string('runway')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('airports');
    }
};
