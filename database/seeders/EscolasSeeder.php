<?php

namespace Database\Seeders;

use App\Enums\RegioesEnum;
use App\Models\Escola;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EscolasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Escola::create([
            'id' => 1,
            'nome' => 'Secretaria Municipal da Educação de Caraguatatuba',
            'segmento' => null,
            'sed_cod_escola' => null,
            'cie' => null,
            'email' => 'seduc@seduc.com',
            'telefone_1' => '',
            'telefone_2' => '',
            'regiao' => RegioesEnum::CENTRO->value,
            'cep' => '',
            'endereco' => '',
            'numero' => '',
            'bairro' => '',
            'complemento' => '',
            'latitude' => '',
            'longitude' => '',
            'observacao' => 'Destinado a testes'
        ]);
    }
}

