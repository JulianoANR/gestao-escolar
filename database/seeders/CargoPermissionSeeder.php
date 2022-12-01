<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CargoPermissionSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('cargo_permission')->delete();

        \DB::table('cargo_permission')->insert([
            0 => [
                'cargo_id' => 1,
                'permission_id' => 1,
            ],
            1 => [
                'cargo_id' => 1,
                'permission_id' => 2,
            ],
            2 => [
                'cargo_id' => 1,
                'permission_id' => 3,
            ],
            3 => [
                'cargo_id' => 1,
                'permission_id' => 4,
            ],
            4 => [
                'cargo_id' => 2,
                'permission_id' => 2,
            ],
            5 => [
                'cargo_id' => 3,
                'permission_id' => 3,
            ],
            6 => [
                'cargo_id' => 3,
                'permission_id' => 4,
            ],
            7 => [
                'cargo_id' => 4,
                'permission_id' => 4,
            ],
            8 => [
                'cargo_id' => 5,
                'permission_id' => 3,
            ],
        ]);
    }
}
