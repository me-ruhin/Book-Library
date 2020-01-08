<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('chapter_id');
            $table->unsignedBigInteger('book_id');
            $table->string('rules_name');
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();

            $table->foreign('chapter_id')
                    ->references('id')
                    ->on('chapters')
                     ->onDelete('cascade');


            $table->foreign('book_id')
                    ->references('id')
                    ->on('books')
                     ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rules');
    }
}
