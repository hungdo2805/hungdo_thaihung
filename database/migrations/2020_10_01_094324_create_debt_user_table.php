<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDebtUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_debt_user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->date('time');
            $table->string('value', 255)->nullable();
            $table->string('outstanding_customer_debt', 255)->nullable();
            $table->string('note', 400)->nullable();
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
        Schema::dropIfExists('shop_debt_user');
    }
}
