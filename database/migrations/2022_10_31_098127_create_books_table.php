<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedInteger('price')->default('0');
            $table->unsignedFloat('rating')->default('0');
            $table->string('preview_image');
            //$table->unsignedBigInteger('author_id');
            $table->foreignId('author_id')->default('1')->references('id')->on('authors');

            $table->foreignId('category_id')->default('1')->references('id')->on("category");
            $table->index('category_id', 'book_category_idx');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
};
