<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('card_number');
            $table->string('expiry_month');
            $table->string('expiry_year');
            $table->string('company');
            $table->string('address_line_one');
            $table->string('address_line_two');
            $table->string('city');
            $table->string('state');
            $table->string('zip');
            $table->timestamp('time_created');
            $table->enum('status', array('in-progress','paid','failed'));
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
        Schema::dropIfExists('payments');
    }
}
