<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{

    public function run()
    {
        factory('App\Models\Articles', 20)->create();
    }
}
