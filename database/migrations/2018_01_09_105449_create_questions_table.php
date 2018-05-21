<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('subject_id')->default(0);
            $table->text('question')->nullable();
            $table->smallInteger('type')->default(0)->comment = "0 = Normal, 1 = MCQ";
            $table->text('answer1')->nullable();
            $table->text('answer2')->nullable();
            $table->text('answer3')->nullable();
            $table->text('answer4')->nullable();
            $table->decimal('marks',5,2)->default(0);
            $table->smallInteger('level')->default(0)->comment = "0 = Low, 1 = Medium, 2 = High";
            $table->smallInteger('status')->default(1)->comment = "-1 = Delete, 0 = In-Active, 1 = Active";
            $table->softDeletes();
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
        Schema::dropIfExists('questions');
    }
}
