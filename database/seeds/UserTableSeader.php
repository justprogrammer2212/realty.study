<?php


use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserTableSeader extends Seeder
{
    public function run () {
        User::updateOrCreate([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
            'role' => User::ROLE_ADMIN,
            'remember_token' => Str::random(20),
        ]);
        factory('App\User', 10)->create();
    }
}