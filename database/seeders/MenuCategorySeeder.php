<?php

namespace Database\Seeders;

use App\Models\MenuCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Minuman'],
            ['name' => 'Makanan'],
            ['name' => 'Dessert'],
        ];

        foreach ($categories as $category) {
            MenuCategory::create($category);
        }
    }
}
