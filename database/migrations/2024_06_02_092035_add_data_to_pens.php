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
        Schema::table('pens', function (Blueprint $table) {
            //
            $table->string('type')->nullable()->default(NULL);
            $table->string('company_name')->nullable()->default(NULL);
            $table->string('price')->nullable()->default(NULL);
            $table->string('shop')->nullable()->default(NULL);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pens', function (Blueprint $table) {
            //
        });
    }
};
