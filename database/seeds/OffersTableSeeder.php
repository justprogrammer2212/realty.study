<?php

use Illuminate\Database\Seeder;

class OffersTableSeeder extends Seeder
{

    public function run()
    {
        factory('App\Models\Offers', 100)->create();
    }
}
