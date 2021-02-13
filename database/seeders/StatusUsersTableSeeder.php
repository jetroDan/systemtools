<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statususers')->insert([
            [
                'status' => 'Activo'
            ],
            [
                'status' => 'Inactivo'
            ],
            [
                'status' => 'Suspendido'
            ]
        ]);
    }
}
