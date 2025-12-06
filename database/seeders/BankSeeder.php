<?php

namespace Database\Seeders;

use App\Models\Bank;
use Illuminate\Database\Seeder;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $banks = [
            ['code' => '001', 'name' => 'Banco de Chile'],
            ['code' => '009', 'name' => 'Banco Internacional'],
            ['code' => '012', 'name' => 'Banco Estado'],
            ['code' => '014', 'name' => 'Scotiabank Chile'],
            ['code' => '016', 'name' => 'Banco de Crédito e Inversiones (BCI)'],
            ['code' => '028', 'name' => 'Banco BICE'],
            ['code' => '031', 'name' => 'HSBC Bank Chile'],
            ['code' => '037', 'name' => 'Banco Santander Chile'],
            ['code' => '039', 'name' => 'Banco Itaú Chile'],
            ['code' => '049', 'name' => 'Banco Security'],
            ['code' => '051', 'name' => 'Banco Falabella'],
            ['code' => '053', 'name' => 'Banco Ripley'],
            ['code' => '055', 'name' => 'Banco Consorcio'],
            ['code' => '059', 'name' => 'Banco BTG Pactual Chile'],
            ['code' => 'C001', 'name' => 'Coopeuch'],
            ['code' => 'C002', 'name' => 'Caja Los Andes (TAP)'],
            ['code' => 'F001', 'name' => 'Fintual'],
            ['code' => 'F002', 'name' => 'Global66'],
            ['code' => 'F003', 'name' => 'Mercado Pago'],
            ['code' => 'F004', 'name' => 'Tenpo'],
            ['code' => 'F005', 'name' => 'Prex'],
            ['code' => 'F006', 'name' => 'Copec Pay'],
            ['code' => 'F007', 'name' => 'La Polar Prepago'],
            ['code' => 'P001', 'name' => 'Los Héroes Prepago'],
            ['code' => 'P002', 'name' => 'Tempo Prepago'],
        ];

        foreach ($banks as $bank) {
            Bank::query()->updateOrCreate(
                ['code' => $bank['code']],
                ['name' => $bank['name']]
            );
        }
    }
}
