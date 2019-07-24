<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeader::class);
        $this->call(CategoriesTableSeader::class);
        $this->call(OffersTableSeader::class);
    }
}
