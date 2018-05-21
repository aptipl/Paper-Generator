<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePapersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('papers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('subject_id')->default(0);
            $table->integer('total_marks')->default(0);
            $table->text('for')->nullable(1);
            $table->text('header')->nullable(1);
            $table->text('date_time')->nullable(1);
            $table->text('instructions')->nullable(1);
            $table->string('pdf',50)->nullable(1);
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
        Schema::dropIfExists('papers');
    }
}
