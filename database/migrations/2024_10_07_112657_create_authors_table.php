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
        // Schema::create('authors', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('title');
        //     $table->string('slug')->unique();
        //     $table->string('category')->nullable();
        //     $table->string('image_path')->nullable();
        //     $table->unsignedBigInteger('author_id')->nullable();
        //     $table->date('post_date');
        //     $table->text('description');
        //     $table->string('button_text')->nullable();
        //     $table->string('button_link')->nullable();
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('authors');
    }
};
