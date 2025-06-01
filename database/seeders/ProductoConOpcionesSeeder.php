<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categoria;
use App\Models\Producto;
use App\Models\OpcionProducto;

class ProductoConOpcionesSeeder extends Seeder
{
    public function run()
    {
        // Obtener las categorías "Desayunos" y "Almuerzos"
        $desayunos = Categoria::where('nombre', 'Desayunos')->first();
        $almuerzos = Categoria::where('nombre', 'Almuerzos')->first();

        // ⚡️ Productos en la categoría "Desayunos"
        $caldo = Producto::create([
            'categoria_id' => $desayunos->id,
            'nombre' => 'Caldo',
            'descripcion' => 'Delicioso caldo caliente.',
            'precio_base' => 11.000,
            'imagen_url' => 'url/a/imagen_caldo.jpg',
        ]);
        $caldo->opciones()->createMany([
            ['nombre_opcion' => 'Caldo de Costilla', 'precio_adicional' => 2.000],
            ['nombre_opcion' => 'Caldo de Gallina', 'precio_adicional' => 3.000],
            ['nombre_opcion' => 'Caldo de Huevo', 'precio_adicional' => 2.000],
        ]);

        $huevos = Producto::create([
            'categoria_id' => $desayunos->id,
            'nombre' => 'Huevos al gusto',
            'descripcion' => 'Prepara tus huevos como prefieras.',
            'precio_base' => 5.500,
            'imagen_url' => 'url/a/imagen_huevos.jpg',
        ]);
        $huevos->opciones()->createMany([
            ['nombre_opcion' => 'Huevos Fritos', 'precio_adicional' => 2.000],
            ['nombre_opcion' => 'Huevos Pericos', 'precio_adicional' => 2.000],
            ['nombre_opcion' => 'Huevos Rancheros', 'precio_adicional' => 2.000],
        ]);

        $empanadas = Producto::create([
            'categoria_id' => $desayunos->id,
            'nombre' => 'Empanadas',
            'descripcion' => 'Variedad de empanadas colombianas.',
            'precio_base' => 4.000,
            'imagen_url' => 'url/a/imagen_empanadas.jpg',
        ]);
        $empanadas->opciones()->createMany([
            ['nombre_opcion' => 'Empanadas de Pollo', 'precio_adicional' => 2.000],
            ['nombre_opcion' => 'Empanadas de Carne', 'precio_adicional' => 1.000],
            ['nombre_opcion' => 'Empanadas Rancheras', 'precio_adicional' => 1.500],
        ]);

        // 🥩 Productos en la categoría "Almuerzos"
        $bandeja_paisa = Producto::create([
            'categoria_id' => $almuerzos->id,
            'nombre' => 'Bandeja Paisa',
            'descripcion' => 'Plato típico con arroz, carne, frijoles y más.',
            'precio_base' => 10.00,
            'imagen_url' => 'url/a/imagen_bandeja_paisa.jpg',
        ]);
        $bandeja_paisa->opciones()->createMany([
            ['nombre_opcion' => 'Con Chicharrón', 'precio_adicional' => 3.000],
            ['nombre_opcion' => 'Con Huevo', 'precio_adicional' => 2.000],
            ['nombre_opcion' => 'Con Tajada de Maduro', 'precio_adicional' => 1.500],
        ]);

        $sancocho = Producto::create([
            'categoria_id' => $almuerzos->id,
            'nombre' => 'Sancocho',
            'descripcion' => 'Sopa tradicional con carne y verduras.',
            'precio_base' => 15.000,
            'imagen_url' => 'url/a/imagen_sancocho.jpg',
        ]);
        $sancocho->opciones()->createMany([
            ['nombre_opcion' => 'Sancocho de Res', 'precio_adicional' => 3.000],
            ['nombre_opcion' => 'Sancocho de Gallina', 'precio_adicional' => 2.000],
            ['nombre_opcion' => 'Sancocho de Pescado', 'precio_adicional' => 3.500],
        ]);

        $arroz_pollo = Producto::create([
            'categoria_id' => $almuerzos->id,
            'nombre' => 'Arroz con Pollo',
            'descripcion' => 'Clásico arroz amarillo con pollo y ensalada.',
            'precio_base' => 12.000,
            'imagen_url' => 'url/a/imagen_arroz_pollo.jpg',
        ]);
        $arroz_pollo->opciones()->createMany([
            ['nombre_opcion' => 'Con Papas Fritas', 'precio_adicional' => 1.000],
            ['nombre_opcion' => 'Con Tajada de Maduro', 'precio_adicional' => 1.500],
            ['nombre_opcion' => 'Con Gaseosa', 'precio_adicional' => 2.500],
        ]);
    }
}
