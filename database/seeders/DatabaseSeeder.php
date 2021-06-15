<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\Blog;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PermissionsTableSeeder::class,
            RolesTableSeeder::class,
            PermissionRoleTableSeeder::class,
            UsersTableSeeder::class,
            RoleUserTableSeeder::class,
            TeamTableSeeder::class,
            TeamUserTableSeeder::class,
            CategorySeeder::class,
        ]);

        Blog::factory(5)->create(); // Create 5 blogs
        Tag::factory(2)->create(); // Create 8 tags

        foreach(Blog::all() as $blog){ // loop through all posts 
            $random_tags = Tag::all()->random(rand(1, 2))->pluck('id')->toArray();
            // Insert random blog tag
            foreach ($random_tags as $tag) {
                DB::table('blog_tag')->insert([
                    'blog_id' => $blog->id,
                    'tag_id' => $tag,
                    'blog_tag_type' => "blogs",
                ]);
            }
        }
    }
}
