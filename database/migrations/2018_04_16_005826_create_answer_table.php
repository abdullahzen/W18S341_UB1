<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer', function (Blueprint $table) {
            $table->increments('answer_ID')->autoIncrement();
            $table->string('answer');
            $table->integer('user_ID2');
            $table->integer('question_ID1');
            $table->integer('upvotes')->default('0');
            $table->integer('is_hidden')->default('0');
            $table->integer('is_bestanswer')->default('0');
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
        Schema::dropIfExists('answer');
    }
}
