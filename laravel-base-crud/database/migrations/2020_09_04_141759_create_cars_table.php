<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('manufacturer');
            $table->integer('Model_Year')->nullable();
            $table->text('description', 500)->nullable();
            $table->string('Model');
            $table->string('transmission')->nullable();
            $table->string('fuel_type')->nullable();
            $table->integer('Doors')->nullable();
  });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
