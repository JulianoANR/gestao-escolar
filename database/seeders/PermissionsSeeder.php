<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id' => 1,
                'title' => 'admin_access',
            ],
            [
                'id' => 2,
                'title' => 'supervisor_access',
            ],
            [
                'id' => 3,
                'title' => 'gestor_access',
            ],
            [
                'id' => 4,
                'title' => 'professor_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
