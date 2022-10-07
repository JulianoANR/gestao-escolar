<?php

namespace Database\Seeders;

use App\Models\Sala;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SalasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sala::create([
            'id' => 1,
            'escola_id' => 1,
            'turma' => '1º ano B',
            'observacao' => 'Turma 1º ano',
        ]);

        Sala::create([
            'id' => 2,
            'escola_id' => 1,
            'turma' => '2º ano C',
            'observacao' => 'Turma 2º ano',
        ]);

        Sala::create([
            'id' => 3,
            'escola_id' => 1,
            'turma' => '3º ano A',
            'observacao' => 'Turma 3º ano',
        ]);

        Sala::create([
            'id' => 4,
            'escola_id' => 1,
            'turma' => '4º ano F',
            'observacao' => 'Turma 4º ano',
        ]);

        Sala::create([
            'id' => 5,
            'escola_id' => 1,
            'turma' => '5º ano B',
            'observacao' => 'Turma 5º ano',
        ]);

        Sala::create([
            'id' => 6,
            'escola_id' => 1,
            'turma' => '6º ano C',
            'observacao' => 'Turma 6º ano',
        ]);

        // Vinculo de Funcionario nas Salas

        DB::table('sala_user')->insert([
            'escola_id' => 1,
            'user_id' => 2,
            'sala_id' => 1,
        ]);

        DB::table('sala_user')->insert([
            'escola_id' => 1,
            'user_id' => 2,
            'sala_id' => 2,
        ]);

        DB::table('sala_user')->insert([
            'escola_id' => 1,
            'user_id' => 2,
            'sala_id' => 3,
        ]);

        DB::table('sala_user')->insert([
            'escola_id' => 1,
            'user_id' => 2,
            'sala_id' => 4,
        ]);

        DB::table('sala_user')->insert([
            'escola_id' => 1,
            'user_id' => 2,
            'sala_id' => 5,
        ]);

        DB::table('sala_user')->insert([
            'escola_id' => 1,
            'user_id' => 2,
            'sala_id' => 6,
        ]);

    }
}
