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
        Schema::create('assignment_film', function (Blueprint $table) {
            $table->id('film');
            $table->string('title');
            $table->text('description');
            $table->year('release_year');
            $table->tinyInteger('language_id');
            $table->tinyInteger('original_language_id');
            $table->tinyText('rental_duration');
            $table->decimal('rental_date');
            $table->smallInteger('length');
            $table->decimal('replace_cost');
            $table->enum('rating');
            $table->set('special_features');
            $table->timestamp('last_update');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assignment_film');
    }
};
