<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsuarioSeeder::class);
        $this->call(BibliotecarioSeeder::class);
        $this->call(LibroSeeder::class);
        $this->call(ActividadSeeder::class);        
    }
}
