<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name'=>'Food',
            'slug'=>'food',
            'color'=>'red'
        ]);
        Category::create([
            'name'=>'Beverages',
            'slug'=>'beverages',
            'color'=>'green'
        ]);
        Category::create([
            'name'=>'Snack',
            'slug'=>'snack',
            'color'=>'blue'
        ]);
    }
}
