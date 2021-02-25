<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SparepartsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('spareparts')->insert([
            [
                'name' => 'Carbones',
                'numberpart' => '9823',
                'serialpart' => 'sa78989S',
                'quuantity' => '10',
                'unit' => 'pares'
            ],
            [
                'name' => 'Engrane',
                'numberpart' => '27187281',
                'serialpart' => 'sa98a9sd',
                'quuantity' => '5',
                'unit' => 'pza'
            ],
            [
                'name' => 'Ventilador',
                'numberpart' => '9764563',
                'serialpart' => 'VENT203810',
                'quuantity' => '3',
                'unit' => 'pza'
            ],
            [
                'name' => 'Chuck',
                'numberpart' => '8137481',
                'serialpart' => 'chksa76d8a',
                'quuantity' => '2',
                'unit' => 'pza'
            ],
            [
                'name' => 'Protector de cable',
                'numberpart' => '9876545',
                'serialpart' => 'ptr209831',
                'quuantity' => '15',
                'unit' => 'pza'
            ]
        ]);
    }
}
