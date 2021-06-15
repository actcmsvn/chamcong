<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_access',
            ],
            [
                'id'    => 2,
                'title' => 'task_access',
            ],
            [
                'id'    => 3,
                'title' => 'permission_access',
            ],
            [
                'id'    => 4,
                'title' => 'role_access',
            ],
            [
                'id'    => 5,
                'title' => 'category_access',
            ],
            [
                'id'    => 6,
                'title' => 'blog_access',
            ],
            [
                'id'    => 7,
                'title' => 'program_access',
            ],
            [
                'id'    => 8,
                'title' => 'contact_access',
            ],
            [
                'id'    => 9,
                'title' => 'general_access',
            ],
            [
                'id'    => 10,
                'title' => 'tag_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
