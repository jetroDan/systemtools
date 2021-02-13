<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusOrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statusorders')->insert([
            [
                'name' => 'Por cotizar'
            ],
            [
                'name' => 'Cotizada'
            ],
            [
                'name' => 'En espera de autorización'
            ],
            [
                'name' => 'En reparación'
            ],
            [
                'name' => 'Reparada'
            ],
            [
                'name' => 'Entregada'
            ]
        ]);
    }
}
