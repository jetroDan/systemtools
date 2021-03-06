<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            [
                'date' => '2021-03-06',
                'users_id' => 1,
                'company_id' => 1,
                'machines_id' => 1,
                'quantity' => '1',
                'description' => 'Mini esmeriladora ',
                'partnumber' => '1092187878238',
                'serialnumber' => 'DW093829812',
                'sparepartsprice' => 200.00,
                'statusorders_id' => 1,
                'spareparts_id' => 1,
                'subtotal' => 100.00,
                'iva' => 16.00,
                'total' => 116.00
               
            ],
            [
                'date' => '2021-03-06',
                'users_id' => 2,
                'company_id' => 2,
                'machines_id' => 2,
                'quantity' => '1',
                'description' => 'Pulidora Bosch sin cables ni clavija ',
                'partnumber' => '1092187878238',
                'serialnumber' => 'DW093829812',
                'sparepartsprice' => 200.00,
                'statusorders_id' => 1,
                'spareparts_id' => 1,
                'subtotal' => 100.00,
                'iva' => 16.00,
                'total' => 116.00
               
            ],
            [
                'date' => '2021-03-06',
                'users_id' => 3,
                'company_id' => 3,
                'machines_id' => 3,
                'quantity' => '1',
                'description' => 'Cortadora de metales sin guarda',
                'partnumber' => '1092187878238',
                'serialnumber' => 'DW093829812',
                'sparepartsprice' => 200.00,
                'statusorders_id' => 1,
                'spareparts_id' => 1,
                'subtotal' => 100.00,
                'iva' => 16.00,
                'total' => 116.00
               
            ],
            [
                'date' => '2021-03-06',
                'users_id' => 4,
                'company_id' => 4,
                'machines_id' => 4,
                'quantity' => '1',
                'description' => 'Mini esmeriladora Makita sin gatillo',
                'partnumber' => '1092187878238',
                'serialnumber' => 'DW093829812',
                'sparepartsprice' => 200.00,
                'statusorders_id' => 1,
                'spareparts_id' => 1,
                'subtotal' => 100.00,
                'iva' => 16.00,
                'total' => 116.00
               
            ],
            [
                'date' => '2021-03-06',
                'users_id' => 5,
                'company_id' => 5,
                'machines_id' => 5,
                'quantity' => '1',
                'description' => 'Pulidora Dewalt con mango puesto',
                'partnumber' => '1092187878238',
                'serialnumber' => 'DW093829812',
                'sparepartsprice' => 200.00,
                'statusorders_id' => 1,
                'spareparts_id' => 1,
                'subtotal' => 100.00,
                'iva' => 16.00,
                'total' => 116.00
               
            ],
            [
                'date' => '2021-03-06',
                'users_id' => 6,
                'company_id' => 1,
                'machines_id' => 1,
                'quantity' => '1',
                'description' => 'Mini esmeriladora ',
                'partnumber' => '1092187878238',
                'serialnumber' => 'DW093829812',
                'sparepartsprice' => 200.00,
                'statusorders_id' => 1,
                'spareparts_id' => 1,
                'subtotal' => 100.00,
                'iva' => 16.00,
                'total' => 116.00
               
            ],
            [
                'date' => '2021-03-06',
                'users_id' => 7,
                'company_id' => 2,
                'machines_id' => 2,
                'quantity' => '1',
                'description' => 'Mini esmeriladora ',
                'partnumber' => '1092187878238',
                'serialnumber' => 'DW093829812',
                'sparepartsprice' => 200.00,
                'statusorders_id' => 1,
                'spareparts_id' => 1,
                'subtotal' => 100.00,
                'iva' => 16.00,
                'total' => 116.00
               
            ],
            [
                'date' => '2021-03-06',
                'users_id' => 8,
                'company_id' => 3,
                'machines_id' => 3,
                'quantity' => '1',
                'description' => 'Mini esmeriladora ',
                'partnumber' => '1092187878238',
                'serialnumber' => 'DW093829812',
                'sparepartsprice' => 200.00,
                'statusorders_id' => 1,
                'spareparts_id' => 1,
                'subtotal' => 100.00,
                'iva' => 16.00,
                'total' => 116.00
               
            ],
            [
                'date' => '2021-03-06',
                'users_id' => 9,
                'company_id' => 4,
                'machines_id' => 4,
                'quantity' => '1',
                'description' => 'Mini esmeriladora ',
                'partnumber' => '1092187878238',
                'serialnumber' => 'DW093829812',
                'sparepartsprice' => 200.00,
                'statusorders_id' => 1,
                'spareparts_id' => 1,
                'subtotal' => 100.00,
                'iva' => 16.00,
                'total' => 116.00
               
            ],
            [
                'date' => '2021-03-06',
                'users_id' => 10,
                'company_id' => 5,
                'machines_id' => 5,
                'quantity' => '1',
                'description' => 'Mini esmeriladora ',
                'partnumber' => '1092187878238',
                'serialnumber' => 'DW093829812',
                'sparepartsprice' => 200.00,
                'statusorders_id' => 1,
                'spareparts_id' => 1,
                'subtotal' => 100.00,
                'iva' => 16.00,
                'total' => 116.00
               
            ],
            
            
            ]);
    }
}
