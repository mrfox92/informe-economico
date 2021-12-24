<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        //  seeders
        // $this->call(CategorySeeder::class);
        $this->call(UserSeeder::class);
        $this->call(TipoIngresoSeeder::class);
        $this->call(TipoEgresoSeeder::class);
        $this->call( IngresoSeeder::class );
        $this->call( EgresoSeeder::class );
        
    }
}   
