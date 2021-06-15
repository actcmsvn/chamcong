<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'id'    => 1,
                'name' => 'Blog',
                'slug' => 'blog',
                'description' => 'ACT Hosting Blog',
            ],
            [
                'id'    => 2,
                'name' => 'ActVPS Script',
                'slug' => 'script',
                'description' => 'Hướng dẫn liên quan ActVPS Script',
            ],
            [
                'id'    => 3,
                'name' => 'Tin tức',
                'slug' => 'tin-tuc',
                'description' => 'Tin tức về công nghệ',
            ],
        ];

        Category::insert($categories);
    }
}
