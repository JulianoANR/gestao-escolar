<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BimestresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bimestres')->insert([
            'id' => 1,
            'sed_id' => 1,
            'descricao' => '1º Bimestre',
        ]);
        
        DB::table('bimestres')->insert([
            'id' => 2,
            'sed_id' => 2,
            'descricao' => '2º Bimestre',
        ]);

        DB::table('bimestres')->insert([
            'id' => 3,
            'sed_id' => 3,
            'descricao' => '3º Bimestre',
        ]);

        DB::table('bimestres')->insert([
            'id' => 4,
            'sed_id' => 4,
            'descricao' => '4º Bimestre',
        ]);

        DB::table('bimestres')->insert([
            'id' => 5,
            'sed_id' => 5,
            'descricao' => 'Anual',
        ]);
    }
}
