<?php

use Illuminate\Database\Seeder;
use App\Bibliotecario;

class BibliotecarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Bibliotecario::class)->times(14)->create();
    }
}
