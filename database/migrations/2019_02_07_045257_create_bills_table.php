<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Prophecy\Argument\Token\AnyValuesToken;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->string('title');
            $table->string('biller');
            $table->bigInteger('type_id');
            $table->double('amount_due');
            $table->date('due_date');
            // Frequency Values
            // 0 - One time only
            // 1 - Weekly
            // 2 - Every two weeks
            // 3 - Monthly
            // 4 - Every two months
            // 5 - Quarterly
            // 6 - Every six months
            // 7 - Yearly
            $table->tinyInteger('frequency')->default(3);
            $table->bigInteger('attached_category_id');
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
        Schema::dropIfExists('bills');
    }
}
