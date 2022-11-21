<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EscolaUserSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('escola_user')->delete();

        \DB::table('escola_user')->insert([
            0 => [
                'escola_id' => 1,
                'user_id' => 1,
            ],
            1 => [
                'escola_id' => 2,
                'user_id' => 2,
            ],
            2 => [
                'escola_id' => 3,
                'user_id' => 3,
            ],
            3 => [
                'escola_id' => 4,
                'user_id' => 4,
            ],
            4 => [
                'escola_id' => 5,
                'user_id' => 5,
            ],
            5 => [
                'escola_id' => 6,
                'user_id' => 6,
            ],
        ]);
    }
}
