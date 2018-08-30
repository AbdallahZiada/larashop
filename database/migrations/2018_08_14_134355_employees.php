<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Employees extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('employees',function(Blueprint $table){
            $table->increments('id'); //id
            $table->string('name');   //row of the name of the employee
            $table->string('email')->unique(); //the email is unique it cant be many
            $table->string('contact_number');//a row is add in the table called contact number
            $table->timestamps();
        });
/*
        $faker = Faker\Factory::create();
        $limit=33;

        for($i=0;$i<$limit;$i++)
        {
            DB::table('employees')->insert([
                'name' => $faker->name,
                'email' => $faker->unique()->email,
                'contact_number' => $faker->phoneNumber,
            ]);
        }
*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('employees');
    }
}
