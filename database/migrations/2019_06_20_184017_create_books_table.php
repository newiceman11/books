<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {

    Schema::create('books', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('author_id')->unsigned();
      $table->string('title');
      $table->text('description');
      $table->string('pdf_file')->nullable();
      $table->timestamps();
      $table->foreign('author_id')->references('id')->on('authors')
      ->onDelete('cascade')
      ->onUpdate('cascade');
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
}
