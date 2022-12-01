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

        $cargos = [
            [
                'id' => 1,
                'title' => 'Administrador',
            ],
            [
                'id' => 2,
                'title' => 'Supervisor',
            ],
            [
                'id' => 3,
                'title' => 'Gestor',
            ],
            [
                'id' => 4,
                'title' => 'Professor',
            ],
            [
                'id' => 5,
                'title' => 'Administrativo',
            ],
        ];

        Cargo::insert($cargos);
    }
}
