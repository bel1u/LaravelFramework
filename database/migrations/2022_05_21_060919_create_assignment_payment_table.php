<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignment_payment', function (Blueprint $table) {
            $table->id('payment_id');
            $table->smallInteger('customer_id');
            $table->tinyInteger('staff_id');
            $table->integer('rental_id');
            $table->decimal('amount');
            $table->dateTime('payment_date');
            $table->timestamps('last_update');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assignment_payment');
    }
};
