<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            [
                'name' => 'Centro de servicio Metabo',
                'address' => 'El centro'
            ],
            [
                'name' => 'Centro de servicio Makita',
                'address' => 'Tlaquepaque'
            ],
            [
                'name' => 'Centro de servicio Bosch',
                'address' => 'Zapopan'
            ],
            [
                'name' => 'Centro de servicio Dewalt',
                'address' => 'El salto'
            ],
            [
                'name' => 'Centro de servicio Milwakee',
                'address' => 'Tlaquepaque'
            ]
        ]);
    }
}
