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
        Schema::create('pзurchases', function (Blueprint $table) {
            $table->id();
            $table->date('date_purchase');
           // $table->unsignedBigInteger('user_id')->nullable();
            //$table->unsignedBigInteger('book_id')->nullable();

            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('book_id')->references('id')->on('books');
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
        Schema::dropIfExists('pзurchases');
    }
};
