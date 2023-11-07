<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInterviewAnswersTable extends Migration
{
    public function up()
    {
        Schema::create('interview_answers', function (Blueprint $table) {
            $table->id();
            $table->string('question1');
            $table->string('question2');
            $table->string('question3');
            $table->string('question4');
            $table->string('question5');
            $table->string('question6');
            $table->string('question7');
            $table->string('question8');
            $table->string('question9')->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('interview_answers');
    }
};
