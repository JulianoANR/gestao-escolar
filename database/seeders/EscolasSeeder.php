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
            'nome' => 'Secretaria Municipal de Educação de Caraguatatuba',
            'segmento' => null,
            'sed_cod_escola' => null,
            'cie' => '350000000000000',
            'email' => '',
            'telefone_1' => '00000000000',
            'telefone_2' => '',
            'regiao' => RegioesEnum::CENTRO->value,
            'cep' => '00000000',
            'endereco' => 'Rua',
            'numero' => '0',
            'bairro' => 'Bairro',
            'complemento' => '',
            'latitude' => '0.000000',
            'longitude' => '0.000000',
            'observacao' => 'Destinado a testes'
        ]);
    }
}

