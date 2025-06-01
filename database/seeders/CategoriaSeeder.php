<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    public function run()
    {
        Categoria::create(['nombre' => 'Desayunos']);
        Categoria::create(['nombre' => 'Almuerzos']); // Agrega más categorías si las tienes
        Categoria::create(['nombre' => 'Bebidas']);
        // ... otras categorías
    }
}