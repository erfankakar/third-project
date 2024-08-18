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
        Schema::create('expiredbooks', function (Blueprint $table) {
            $table->id();
         
            $table->string('p_name');
            $table->string('p_last_name');
            $table->date('lend_date');
            $table->date('expire_date');
            $table->string('description');
      



            $table->unsignedBigInteger('lending_book_id')->nullable();
            $table->foreign('lending_book_id')->references('id')->on('lending_books')
            ->ondelete('No Action')->onupdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expiredbooks');
    }
};
