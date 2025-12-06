<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Servicios Básicos'],
            ['name' => 'Arriendo'],
            ['name' => 'Crédito Hipotecario'],
            ['name' => 'Seguros'],
            ['name' => 'Educación'],
            ['name' => 'Salud'],
            ['name' => 'Supermercado'],
            ['name' => 'Carnes'],
            ['name' => 'Feria'],
            ['name' => 'Mascotas'],
            ['name' => 'Farmacia'],
            ['name' => 'Transporte'],
            ['name' => 'Combustible'],
            ['name' => 'Aplicaciones de Movilidad'],
            ['name' => 'Restaurantes'],
            ['name' => 'Entretenimiento'],
            ['name' => 'Suscripciones'],
            ['name' => 'Ropa'],
            ['name' => 'Interés Tarjeta de Crédito'],
            ['name' => 'Pago Tarjeta de Crédito'],
            ['name' => 'Intereses Línea de Crédito'],
            ['name' => 'Comisiones Bancarias'],
            ['name' => 'Sueldo'],
            ['name' => 'Reembolsos'],
            ['name' => 'Otros Ingresos'],
            ['name' => 'Gastos de Hijos'],
            ['name' => 'Educación Hijos'],
            ['name' => 'Transferencia Interna'],
            ['name' => 'No Categorizado'],
        ];

        foreach ($categories as $category) {
            Category::query()->updateOrCreate(
                ['slug' => Str::slug($category['name'])],
                ['name' => $category['name']]
            );
        }
    }
}
