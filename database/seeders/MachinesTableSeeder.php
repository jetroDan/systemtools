<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MachinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Db::table('machines')->insert([
            [
                'name' => 'Mini Esmeriladora',
                'brand' => 'Dewalt'
               
            ],
            [
                'name' => 'Pulidora',
                'brand' => 'Bosch'
            ],
            [
                'name' => 'Cortadora de metales',
                'brand' => 'Dewalt'
            ],
            [
                'name' => 'Mini Esmeriladora',
                'brand' => 'Makita'
            ],
            [
                'name' => 'Pulidora',
                'brand' => 'Dewalt'
            ]
        ]);
    }
}
