<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;//coloquei na mão.
use Database\Factories\UserFactory;
use FactoryCall;
use Faker\Factory;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create(); //criando 10 usuário aleatórios
        
        // User::create([
        //     'name' => 'Andre Luiz',
        //     'email' => 'aldg5875@gmail.com',
        //     'password' => bcrypt('123456'),
        // ]);
    }
}
