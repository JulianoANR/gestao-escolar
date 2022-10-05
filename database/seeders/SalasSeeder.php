<?php

namespace Database\Seeders;

use App\Models\Sala;
use App\Models\{User};
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
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

        $sala = Sala::create([
            'id' => 1,
            'escola_id' => 1,
            'turma' => 'A',
            'observacao' => 'Turma A',
        ]);

        $sala = Sala::create([
            'id' => 2,
            'escola_id' => 1,
            'turma' => 'B',
            'observacao' => 'Turma B',
        ]);

        $sala = Sala::create([
            'id' => 3,
            'escola_id' => 1,
            'turma' => 'C',
            'observacao' => 'Turma C',
        ]);

        $sala = Sala::create([
            'id' => 4,
            'escola_id' => 1,
            'turma' => 'D',
            'observacao' => 'Turma D',
        ]);

    }
}
