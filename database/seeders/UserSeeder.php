<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'  =>  'administrador',
            'email' =>  'admin@test.com',
            'password'  =>  bcrypt('test1234')
        ]);

    }
}
