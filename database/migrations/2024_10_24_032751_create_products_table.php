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
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('code')->unique();
            $table->decimal('price', 10, 2);
            $table->decimal('previous_price', 10, 2)->nullable();
            $table->integer('quantity');
            $table->text('product_information')->nullable();
            $table->text('product_description')->nullable();
            $table->unsignedBigInteger('template_id');
            $table->string('featured_image')->nullable();
            $table->string('first_image')->nullable();
            $table->string('second_image')->nullable();
            $table->string('third_image')->nullable();
            $table->enum('status', ['published', 'unpublished'])->default('published');





            $table->string('countdowndate')->nullable();
            $table->string('section_title')->nullable();

            $table->string('header_title')->nullable();
            $table->string('video_url')->nullable();
            $table->string('video')->nullable();

            $table->string('faq_section_title')->nullable();
            $table->string('faq_questions')->nullable();
            $table->string('faq_answers')->nullable();

            $table->string('review_images')->nullable();

            $table->string('slug')->nullable();

            $table->timestamps();
            
            // Foreign key relation
            $table->foreign('template_id')->references('id')->on('templates');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
