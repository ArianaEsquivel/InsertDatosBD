<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Personas;
//use App\Models\Mascotas;

class PersonasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Personas::factory(10)->create();
        //Personas::factory()->has(Mascotas::factory()->count(2))
          //  ->create();
    }
}
