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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->longText('content')->nullable()->default(NULL);
            $table->string('page_status')->nullable()->default(NULL);
            $table->string('short_description')->nullable()->default(NULL);
            $table->longText('blocks')->nullable()->default(NULL);
            $table->boolean('is_deleteable')->nullable()->default(true);
            $table->index(['title', 'slug']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
