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
        Schema::create('client_messages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // User who listed the property
            $table->unsignedBigInteger('property_id'); // Property ID
            $table->string('property_type'); // Venue, Hotel, Shortlet
            $table->string('name'); // Name of the person sending the message
            $table->string('email'); // Email of the person sending the message
            $table->string('phone'); // Phone number
            $table->text('message')->nullable(); // Message content
            // $table->timestamps();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_messages');
    }
};
