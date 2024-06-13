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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable()->default(NULL);

            $table->string('name')->nullable()->default(NULL);
            $table->string('email')->nullable()->default(NULL);
            $table->string('description')->nullable()->default(NULL);

            $table->string('up_votes')->nullable()->default(NULL);

            $table->string('down_votes')->nullable()->default(NULL);

            $table->string('post_id')->nullable()->default(NULL);

            $table->string('parent_id')->nullable()->default(NULL);

            $table->string('comment_status')->nullable()->default('pending');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
