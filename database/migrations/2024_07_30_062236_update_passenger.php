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
        Schema::table('passengers', function (Blueprint $table) {
            //
            $table->string('name');
            $table->string('first_name')->nullable()->default(NULL)->change();
            $table->string('last_name')->nullable()->default(NULL)->change();
            $table->string('age')->nullable()->default(NULL);
            $table->string('emergency_contact_number')->nullable()->default(NULL);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('passengers', function (Blueprint $table) {
            //
        });
    }
};