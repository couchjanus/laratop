<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($x = 1; $x <= 100; $x++)
        {
          DB::table('articles')->insert([
              'title' => str_random(100),
              'body' =>str_random(255),
             ]);
        }
    }

}
