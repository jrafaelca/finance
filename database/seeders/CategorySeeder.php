<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['code' => 'services', 'name' => 'Servicios Básicos'],
            ['code' => 'rent', 'name' => 'Arriendo'],
            ['code' => 'mortgage', 'name' => 'Crédito Hipotecario'],
            ['code' => 'insurance', 'name' => 'Seguros'],
            ['code' => 'education', 'name' => 'Educación'],
            ['code' => 'health', 'name' => 'Salud'],
            ['code' => 'supermarket', 'name' => 'Supermercado'],
            ['code' => 'meat', 'name' => 'Carnes'],
            ['code' => 'market', 'name' => 'Feria'],
            ['code' => 'pets', 'name' => 'Mascotas'],
            ['code' => 'pharmacy', 'name' => 'Farmacia'],
            ['code' => 'transport', 'name' => 'Transporte'],
            ['code' => 'fuel', 'name' => 'Combustible'],
            ['code' => 'mobility_app', 'name' => 'Aplicaciones de Movilidad'],
            ['code' => 'restaurants', 'name' => 'Restaurantes'],
            ['code' => 'entertainment', 'name' => 'Entretenimiento'],
            ['code' => 'subscriptions', 'name' => 'Suscripciones'],
            ['code' => 'clothing', 'name' => 'Ropa'],
            ['code' => 'credit_card_interest', 'name' => 'Interés Tarjeta de Crédito'],
            ['code' => 'credit_card_payment', 'name' => 'Pago Tarjeta de Crédito'],
            ['code' => 'line_interest', 'name' => 'Intereses Línea de Crédito'],
            ['code' => 'commissions', 'name' => 'Comisiones Bancarias'],
            ['code' => 'salary', 'name' => 'Sueldo'],
            ['code' => 'refunds', 'name' => 'Reembolsos'],
            ['code' => 'other_income', 'name' => 'Otros Ingresos'],
            ['code' => 'kids', 'name' => 'Gastos de Hijos'],
            ['code' => 'kids_education', 'name' => 'Educación Hijos'],
            ['code' => 'internal_transfer', 'name' => 'Transferencia Interna'],
            ['code' => 'uncategorized', 'name' => 'No Categorizado'],
        ];

        foreach ($categories as $cat) {
            Category::query()->updateOrCreate(
                ['code' => $cat['code']],
                ['name' => $cat['name']]
            );
        }
    }
}
