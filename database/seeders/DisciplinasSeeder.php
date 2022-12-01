<?php

namespace Database\Seeders;

use App\Models\Disciplina;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DisciplinasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Disciplina::create([
            'descricao' => 'Matemática',
            'sigla' => 'MAT',
            'cod' => '1',
        ]);
        Disciplina::create([
            'descricao' => 'Português',
            'sigla' => 'POR',
            'cod' => '2',
        ]);
        Disciplina::create([
            'descricao' => 'História',
            'sigla' => 'HIS',
            'cod' => '3',
        ]);
        Disciplina::create([
            'descricao' => 'Geografia',
            'sigla' => 'GEO',
            'cod' => '4',
        ]);
        Disciplina::create([
            'descricao' => 'Inglês',
            'sigla' => 'ING',
            'cod' => '5',
        ]);
        Disciplina::create([
            'descricao' => 'Educação Física',
            'sigla' => 'EDF',
            'cod' => '6',
        ]);
        Disciplina::create([
            'descricao' => 'Artes',
            'sigla' => 'ART',
            'cod' => '7',
        ]);
        Disciplina::create([
            'descricao' => 'Ciências',
            'sigla' => 'CIE',
            'cod' => '8',
        ]);
    }
}
