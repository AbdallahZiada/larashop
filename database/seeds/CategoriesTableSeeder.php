<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert(['name'=>'MEN']);
        DB::table('categories')->insert(['name'=>'WOMEN']);
        DB::table('categories')->insert(['name'=>'KIDS']);
        DB::table('categories')->insert(['name'=>'FASHION']);
        DB::table('categories')->insert(['name'=>'CLOTHING']);
    }
}
