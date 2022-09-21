<?php

namespace Database\Seeders;

use App\Models\{User};
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
            'name' => 'Juliano Appezzato Nunes Rosa',
            'email' => 'juliano.appe@gmail.com',
            'password' => Hash::make('admin'),
        ]);
    }
}
