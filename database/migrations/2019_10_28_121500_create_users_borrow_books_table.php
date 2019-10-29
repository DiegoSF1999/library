<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersBorrowBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_borrow_books', function (Blueprint $table) {
            $table->primary('user_id');
            $table->timestamps();
            
            $table->foreign('user_id')
                ->references('id')->on('users');
            $table->foreign('book_id')
                ->references('id')->on('books');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_borrow_books');
    }
}
