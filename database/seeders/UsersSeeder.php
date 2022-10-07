<?php

namespace Database\Seeders;

use App\Models\{User};
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name'              => 'Juliano Appezzato Nunes Rosa',
            'cpf'               => '12345678901',
            'matricula'         => '1234567',
            'data_nascimento'   => '1990-01-01',
            'email'             => 'juliano.appe@gmail.com',
            'password'          => Hash::make('admin'),
        ]);

        $user->cargos()->attach(1);

        $user = User::create([
            'name' => 'Caio Willwohl Perez Ribeiro',
            'email' => 'caio.w.ribeiro@gmail.com',
            'password' => Hash::make('admin'),
            'cpf' => '479.118.358-45',
            'matricula' => '25296',
            'data_nascimento' => '2002-04-11',
        ]);

        $user->cargos()->attach(1);
    }
}
