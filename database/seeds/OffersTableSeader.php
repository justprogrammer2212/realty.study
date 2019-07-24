<?php


use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class OffersTableSeader extends Seeder
{
    public function run() {
        factory('App\Models\Offer', 100)->create();
    }
}