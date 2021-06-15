<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Blog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence;
        
        $contents = collect($this->faker->paragraphs(rand(5, 15)))
        ->map(function($item){
            return "<p>$item</p>";
        })->toArray();
        $contents = implode($contents);

        return [
            'created_by' => 1,
            'category_id' => 1,
            'title' => $title,
            'description' => $this->faker->paragraph,
            'slug' => Str::slug($title),
            'contents' => $contents,
            'img_path' => 'public/blog-photos/image_1.jpg',
            'is_featured' => 1,
            'is_published' => 1,
            'views' => rand(1, 9),
        ];
    }
}
