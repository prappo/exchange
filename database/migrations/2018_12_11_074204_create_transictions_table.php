<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransictionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transictions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('transaction_id');
            $table->string('userId');
            $table->string('send');
            $table->string('sendAmount');
            $table->string('receive');
            $table->string('receiveAmount');
            $table->string('amount');
            $table->string('details')->nullable();
            $table->string('status');
            $table->string('process_type');
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
        Schema::dropIfExists('transictions');
    }
}
