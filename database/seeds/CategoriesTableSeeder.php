<?php

use App\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Solo', 'Couples', 'Family', 'International', 'Domestic'];

        foreach($categories as $category) {
            $newCategory = new Category();
            $newCategory->category_name = $category;
            $newCategory->category_slug = Str::slug($category);
            $newCategory->save();
        }
    }
}