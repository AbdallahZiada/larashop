<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDrinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('drinks',function (Blueprint $table){ //bluprint opject type
            $table->increments('id');//increments:a function of the bluprint functions(increments every time data added)
            $table->string('name',75)->unique();// we added another row to the table called name 75 is the length ..
            $table->text('comments')->nullable();// a row for the comments it can be null value
            $table->integer('rating');//an integer type row called rating is added to table
            $table->date('juice_date');//a date of the juice is added as a row
            $table->timestamps(); // this statment will add two row (created_at) and (updated_at) for each column
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //in case of roll back this function will be executed
        Schema::dropIfExists('drinks');//the statment will drop the table as long as it exsit
    }
}
