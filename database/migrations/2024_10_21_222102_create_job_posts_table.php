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
        Schema::create('job_posts', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('company_logo_path')->nullable();
            $table->text('company_description')->nullable();
            $table->string('category');
            $table->string('title');
            $table->text('description');
            $table->string('job_type');
            $table->decimal('salary', 10, 2)->nullable();
            $table->boolean('negotiable')->default(false);
            $table->date('start_date')->nullable();
            $table->string('contact_name');
            $table->string('contact_email');
            $table->string('phone_number')->nullable();
            $table->string('city');
            $table->string('application_url')->nullable();
            $table->string('tags')->nullable();
            $table->text('terms')->nullable();
            $table->string('email');
            $table->boolean('feature')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_posts');
    }
};
