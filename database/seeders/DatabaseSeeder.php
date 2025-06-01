<?php

namespace Database\Seeders;
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
        $this->call([
            CategoriaSeeder::class,
            ProductoConOpcionesSeeder::class, // Llama a tu nuevo seeder
            // ... otros seeders si tienes
        ]);
    }
    if (!Categoria::where('nombre', 'Desayunos')->exists()) {
        Categoria::create(['nombre' => 'Desayunos']);
    }
    
}