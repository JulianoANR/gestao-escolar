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
            'id'                => '1',
            'name'              => 'Juliano Appezzato Nunes Rosa',
            'email'             => 'juliano.appe@gmail.com',
            'password'          => Hash::make('admin'),
            'cpf'               => '12345678901',
            'matricula'         => '1234567',
            'data_nascimento'   => '1990-01-01',
        ]);

        $user = User::create([
            'id'                => '2',
            'name'              => 'Caio Willwohl Perez Ribeiro',
            'email'             => 'caio.w.ribeiro@gmail.com',
            'password'          => Hash::make('admin'),
            'cpf'               => '479.118.358-45',
            'matricula'         => '25296',
            'data_nascimento'   => '2002-04-11',
        ]);
    }
}
