<?php

use Illuminate\Database\Seeder;
use App\Actividad;

class ActividadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Actividad::class)->times(20)->create();
    }
}
