<?php


use App\Models\Category;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategoriesTableSeader extends Seeder
{
    public function run () {
        Category::updateOrCreate([
            'name' => 'Продаж квартир',
        ]);
        Category::updateOrCreate([
            'name' => 'Продаж будинків',
        ]);
        Category::updateOrCreate([
            'name' => 'Оренда квартир',
        ]);
        Category::updateOrCreate([
            'name' => 'Оренда будинків',
        ]);
        Category::updateOrCreate([
            'name' => 'Продаж землі',
        ]);
    }
}