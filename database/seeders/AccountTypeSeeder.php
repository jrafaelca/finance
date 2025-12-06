<?php

namespace Database\Seeders;

use App\Models\AccountType;
use Illuminate\Database\Seeder;

class AccountTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            ['code' => 'checking', 'name' => 'Cuenta Corriente'],
            ['code' => 'savings', 'name' => 'Cuenta de Ahorro'],
            ['code' => 'vista', 'name' => 'Cuenta Vista'],
            ['code' => 'credit_card', 'name' => 'Tarjeta de Crédito'],
            ['code' => 'line_of_credit', 'name' => 'Línea de Crédito'],
            ['code' => 'prepaid', 'name' => 'Tarjeta Prepago'],
            ['code' => 'investment', 'name' => 'Cuenta de Inversión'],
            ['code' => 'virtual_wallet', 'name' => 'Billetera Digital'],
            ['code' => 'cash', 'name' => 'EfZectivo'],
        ];

        foreach ($types as $type) {
            AccountType::query()->updateOrCreate(
                ['code' => $type['code']],
                ['name' => $type['name']]
            );
        }
    }
}
