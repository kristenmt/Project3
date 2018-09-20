<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('data', function (Blueprint $table) {
            $table->increments('id');
            $table->string('State');
            $table->string('City');
            $table->integer('Cost_of_Living');
            $table->string('Weather');
            $table->integer('Region');
            $table->string('Property_Value');
            $table->integer('Population');
            $table->string('Employment');
            $table->string('Avg_Rent');
            $table->string('Geography');
            $table->string('Median_Income');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
