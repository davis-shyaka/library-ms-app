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
            $table->string('title');
            $table->foreignId('author_id')->references('id')->on('authors')->onDelete('cascade');
            $table->longText('description');
            $table->foreignId('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->string('language');
            $table->string('format');
            $table->string('publisher');
            $table->string('isbn')->unique();
            $table->string('quantity');
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
