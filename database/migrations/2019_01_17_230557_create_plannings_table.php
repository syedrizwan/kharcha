<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plannings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('budget_id');
            $table->bigInteger('category_id')->nullable(); // for expense planning
            $table->bigInteger('account_id')->nullable(); // for income planning
            $table->double('amount');
            $table->dateTime('remind_on');
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
        Schema::dropIfExists('plannings');
    }
}
