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
                'brand' => 'Dewalt',
                'partnumber' => '1092187878238',
                'serialnumber' => 'DW093829812'
            ],
            [
                'name' => 'Pulidora',
                'brand' => 'Bosch',
                'partnumber' => '98342032093',
                'serialnumber' => 'Bfsa908d0a9'
            ],
            [
                'name' => 'Cortadora de metales',
                'brand' => 'Dewalt',
                'partnumber' => '9834920933',
                'serialnumber' => 'DEW09878ew'
            ],
            [
                'name' => 'Mini Esmeriladora',
                'brand' => 'Makita',
                'partnumber' => '9382095776',
                'serialnumber' => 'MK998217671'
            ],
            [
                'name' => 'Pulidora',
                'brand' => 'Dewalt',
                'partnumber' => '91541324',
                'serialnumber' => 'DW0987544312'
            ]
        ]);
    }
}
