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
        $users = [
            [
                'id' => 1,
                'name' => 'Admin Seduc',
                'email' => 'admin@admin.com',
                'password' => '$2y$10$CYDf53IaWuqWcjeSNfKxWOd7fy/flhk/ABjBzkIBGaPZCIjrqyU.a',
                'created_at' => '2021-12-24 12:08:40',
                'updated_at' => '2021-12-24 12:09:34',
                'deleted_at' => null,
                'cpf'               => '491.742.496-81',
                'matricula'         => '12341',
                'data_nascimento'   => '1990-01-01',
            ],
            [
                'id' => 2,
                'name' => 'Supervisor Seduc',
                'email' => 'supervisor@supervisor.com',
                'password' => '$2y$10$CYDf53IaWuqWcjeSNfKxWOd7fy/flhk/ABjBzkIBGaPZCIjrqyU.a',
                'created_at' => '2021-12-24 12:08:40',
                'updated_at' => '2021-12-24 12:09:34',
                'deleted_at' => null,
                'cpf'               => '209.519.788-70',
                'matricula'         => '12342',
                'data_nascimento'   => '1990-01-01',
            ],
            [
                'id' => 3,
                'name' => 'Gestor Seduc',
                'email' => 'gestor@gestor.com',
                'password' => '$2y$10$CYDf53IaWuqWcjeSNfKxWOd7fy/flhk/ABjBzkIBGaPZCIjrqyU.a',
                'created_at' => '2021-12-24 12:08:40',
                'updated_at' => '2021-12-24 12:09:34',
                'deleted_at' => null,
                'cpf'               => '646.682.535-37',
                'matricula'         => '12343',
                'data_nascimento'   => '1990-01-01',
            ],
            [
                'id' => 4,
                'name' => 'Professor Seduc',
                'email' => 'professor@professor.com',
                'password' => '$2y$10$CYDf53IaWuqWcjeSNfKxWOd7fy/flhk/ABjBzkIBGaPZCIjrqyU.a',
                'created_at' => '2021-12-24 12:08:40',
                'updated_at' => '2021-12-24 12:09:34',
                'deleted_at' => null,
                'cpf'               => '845.408.192-59',
                'matricula'         => '12344',
                'data_nascimento'   => '1990-01-01',
            ],
            [
                'id' => 5,
                'name' => 'Administrativo Gestor',
                'email' => 'administrativo@gestor.com',
                'password' => '$2y$10$CYDf53IaWuqWcjeSNfKxWOd7fy/flhk/ABjBzkIBGaPZCIjrqyU.a',
                'created_at' => '2021-12-24 12:08:40',
                'updated_at' => '2021-12-24 12:09:34',
                'deleted_at' => null,
                'cpf'               => '263.453.031-51',
                'matricula'         => '12345',
                'data_nascimento'   => '1990-01-01',
            ],
            [
                'id' => 6,
                'name' => 'Caio Willwohl Perez Ribeiro',
                'email' => 'caio.w.ribeiro@gmail.com',
                'password' => '$2y$10$CYDf53IaWuqWcjeSNfKxWOd7fy/flhk/ABjBzkIBGaPZCIjrqyU.a',
                'created_at' => '2021-12-24 12:08:40',
                'updated_at' => '2021-12-24 12:09:34',
                'deleted_at' => null,
                'cpf'               => '234.233.218-14',
                'matricula'         => '12346',
                'data_nascimento'   => '1990-01-01',
            ],
        ];

        User::insert($users);
    }
}
