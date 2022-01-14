<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mascotas;

class MascotasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // \App\Models\Mascotas::factory(100000)->for(Personas::factory()->state([
         //   'persona_id' => \App\Models\Personas::all()->random(),
        //]))->create();
        //Mascotas::factory()->hasAttached(
          // ['persona_id' => Personas::all()->random()->id]
        //)->create();
        //Mascotas::factory()->hasAttached(\App\Models\Personas::factory(), 'persona_id')->create();
        Mascotas::factory()->create();
    }
}
