<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SalaUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('sala_user')->delete();

        \DB::table('sala_user')->insert([
            0 => [
                'escola_id' => 1,
                'user_id' => 1,
                'sala_id' => 1,
                'disciplina_id' => 1,
            ],
            1 => [
                'escola_id' => 2,
                'user_id' => 2,
                'sala_id' => 2,
                'disciplina_id' => 2,
            ],
            2 => [
                'escola_id' => 3,
                'user_id' => 3,
                'sala_id' => 3,
                'disciplina_id' => 3,
            ],
            3 => [
                'escola_id' => 4,
                'user_id' => 4,
                'sala_id' => 4,
                'disciplina_id' => 4,
            ],
            4 => [
                'escola_id' => 5,
                'user_id' => 5,
                'sala_id' => 5,
                'disciplina_id' => 5,
            ],
            5 => [
                'escola_id' => 6,
                'user_id' => 6,
                'sala_id' => 6,
                'disciplina_id' => 6,
            ],
            6 => [
                'escola_id' => 7,
                'user_id' => 2,
                'sala_id' => 1,
                'disciplina_id' => 7,
            ],
            7 => [
                'escola_id' => 8,
                'user_id' => 3,
                'sala_id' => 6,
                'disciplina_id' => 8,
            ],
            8 => [
                'escola_id' => 9,
                'user_id' => 4,
                'sala_id' => 6,
                'disciplina_id' => 5,
            ],
        ]);
    }
}
