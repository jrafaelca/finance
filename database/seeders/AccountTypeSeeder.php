<?php

namespace Database\Seeders;

use App\Models\AccountType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AccountTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            ['name' => 'Cuenta Corriente'],
            ['name' => 'Cuenta de Ahorro'],
            ['name' => 'Cuenta Vista'],
            ['name' => 'Tarjeta de Crédito'],
            ['name' => 'Línea de Crédito'],
            ['name' => 'Tarjeta Prepago'],
            ['name' => 'Cuenta de Inversión'],
            ['name' => 'Billetera Digital'],
            ['name' => 'Efectivo'],
        ];

        foreach ($types as $type) {
            AccountType::query()->updateOrCreate(
                ['slug' => Str::slug($type['name'])],
                ['name' => $type['name']]
            );
        }
    }
}
