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
        Schema::create('lending_books', function (Blueprint $table) {
            $table->id();
           
            $table->string('p_name');
            $table->string('p_last_name');
            $table->date('lend_date');
            $table->date('expire_date');
            $table->string('description');
            $table->string('statusa')->nullable();



            $table->unsignedBigInteger('books_id')->nullable();
            $table->foreign('books_id')->references('id')->on('books')
            ->ondelete('No Action')->onupdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lending_books');
    }
};
