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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('link')->nullable()->default(null);
            $table->enum('status', ['enabled', 'disabled'])->default('enabled');
            $table->unsignedBigInteger('parent_id')->nullable()->default(null);
            $table->integer('ordering')->nullable()->default(NULL);
            $table->boolean('is_external_link')->nullable()->default(0);
            $table->string('slug')->unique()->nullable()->default(NULL);
            $table->boolean('display_footer')->nullable()->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
