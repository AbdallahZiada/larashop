<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutsTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('products',function(Blueprint $table){
            $table->increments('id');
            $table->string('name',255)->unique();
            $table->string('title',140);
            $table->string('description',500);
            $table->integer('price');
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('brand_id');
            $table->timestamps();
            $table->string('created_at_ip');
            $table->string('updated_at_ip');
        });

        Schema::table('products',function(Blueprint $table){
            //making the category_id the foreign key from the categories table
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

            //making the brands_id the foreign key from the brands table 
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
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
        Schema::dropIfExists('products');
    }
}
