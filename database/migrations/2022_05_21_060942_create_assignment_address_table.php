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
        Schema::create('assignment_address', function (Blueprint $table) {
            $table->smallInteger('address_id');
            $table->string('address');
            $table->string('address2');
            $table->string('district');
            $table->smallInteger('city_id');
            $table->string('postal_code');
            $table->string('phone');
            $table->geometry('location');
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
        Schema::dropIfExists('assignment_address');
    }
};
