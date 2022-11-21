<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CargoUserSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('cargo_user')->delete();

        \DB::table('cargo_user')->insert([
            0 => [
                'cargo_id' => 1,
                'user_id' => 1,
            ],
            1 => [
                'cargo_id' => 2,
                'user_id' => 2,
            ],
            2 => [
                'cargo_id' => 3,
                'user_id' => 3,
            ],
            3 => [
                'cargo_id' => 4,
                'user_id' => 4,
            ],
            4 => [
                'cargo_id' => 5,
                'user_id' => 5,
            ],
            5 => [
                'cargo_id' => 3,
                'user_id' => 6,
            ],
        ]);
    }
}
