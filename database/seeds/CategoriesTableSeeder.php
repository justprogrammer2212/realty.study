<?php

use App\Models\Categories;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        Categories::updateOrcreate([
            'name' => 'Продаж квартир',
        ]);
        Categories::updateOrcreate([
            'name' => 'Продаж особняків',
        ]);
        Categories::updateOrcreate([
            'name' => 'Оренда квартир',
        ]);
        Categories::updateOrcreate([
            'name' => 'Оренда особняків',
        ]);
        Categories::updateOrcreate([
            'name' => 'Продаж землі',
        ]);

    }
}
