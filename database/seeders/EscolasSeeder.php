<?php

namespace Database\Seeders;

use App\Models\Escola;
use App\Enums\RegioesEnum;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
            'cie' => '35000',
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

        DB::table('escola_user')->insert([
            'user_id' => 1,
            'escola_id' => 1,
        ]);

        DB::table('escola_user')->insert([
            'user_id' => 2,
            'escola_id' => 1,
        ]);
    }
}

