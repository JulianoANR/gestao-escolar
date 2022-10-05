<?php

namespace Database\Seeders;

use App\Models\Cargo;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CargosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cargo::create([
            'descricao' => 'Administrador',
        ]);

        Cargo::create([
            'descricao' => 'Supervisor',
        ]);

        Cargo::create([
            'descricao' => 'Gestor',
        ]);

        Cargo::create([
            'descricao' => 'Professor',
        ]);

    }
}
