<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('question', function (Blueprint $table) {
            $table->increments('question_ID')->autoIncrement();
            $table->integer('user_ID1');
            $table->integer('category_ID1');
            $table->integer('best_answer_ID')->default('0');
            $table->string('title');
            $table->string('content');
            $table->integer('upvotes')->default('0');
            $table->integer('comments')->default('0');
            $table->integer('favorites')->default('0');
            $table->integer('views')->default('0');
            $table->integer('is_hidden')->default('0');
            $table->timestamp('create_time')->useCurrent();
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
        Schema::dropIfExists('question');
    }
}
