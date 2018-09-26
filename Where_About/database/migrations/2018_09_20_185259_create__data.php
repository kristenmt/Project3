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
        Schema::create('quizzes', function (Blueprint $table) {
            $table->increments('id');
            $table->VARCHAR('State');
            $table->VARCHAR('City');
            $table->VARCHAR('Cost_of_Living');
            $table->VARCHAR('Weather');
            $table->VARCHAR('Region');
            $table->VARCHAR('Property_Value');
            $table->VARCHAR('population');
            $table->VARCHAR('Employment');
            $table->VARCHAR('Avg_Rent');
            $table->VARCHAR('Geography');
            $table->VARCHAR('Median_Income');
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