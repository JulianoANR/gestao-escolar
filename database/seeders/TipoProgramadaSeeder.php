<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TipoProgramadaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_programada')->insert([
            'descricao' => 'Aula',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('tipo_programada')->insert([
            'descricao' => 'Prova',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('tipo_programada')->insert([
            'descricao' => 'Trabalho',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}
