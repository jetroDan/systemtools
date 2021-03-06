<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BranchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('branches')->insert([
            [
                'name' => 'Centro de servicio Metabo suc1',
                'address' => 'El centro',
                'company_id' => 1
            ],
            [
                'name' => 'Centro de servicio Makita suc1',
                'address' => 'Tlaquepaque',
                'company_id' => 2
            ],
            [
                'name' => 'Centro de servicio Bosch suc1',
                'address' => 'Zapopan',
                'company_id' => 3
            ],
            [
                'name' => 'Centro de servicio Dewalt suc1',
                'address' => 'El salto',
                'company_id' => 4
            ],
            [
                'name' => 'Centro de servicio Milwakee suc1',
                'address' => 'Tlaquepaque',
                'company_id' => 4
            ]
        ]);
    }
}
