<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuyAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buy_accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('account_type');
            $table->string('name');
            $table->string('email');
            $table->string('number');
            $table->string('amount');
            $table->string('status');
            $table->string('transaction_confirmation_id')->nullable();
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
        Schema::dropIfExists('buy_accounts');
    }
}
