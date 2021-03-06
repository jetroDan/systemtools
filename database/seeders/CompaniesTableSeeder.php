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
                'address' => 'El centro',
                'users_id' => 1
            ],
            [
                'name' => 'Centro de servicio Makita',
                'address' => 'Tlaquepaque',
                'users_id' => 2
            ],
            [
                'name' => 'Centro de servicio Bosch',
                'address' => 'Zapopan',
                'users_id' => 3
            ],
            [
                'name' => 'Centro de servicio Dewalt',
                'address' => 'El salto',
                'users_id' => 4
            ],
            [
                'name' => 'Centro de servicio Milwakee',
                'address' => 'Tlaquepaque',
                'users_id' => 5
            ]
        ]);
    }
}
