<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Jose Juan',
                'lastname' =>'Gonzales Duran',
                'phone' => '1290784567',
                'email' => 'josejuan@gmail.com',
                'address' => 'Rayon 1',
                'password' => '1234',
                'nss' => '987sf78sd79',
                'rfc' => 'RFC898s98'
            ],
            [
                'name' => 'Efren Alejandro',
                'lastname' =>'Ochoa gutierrez',
                'phone' => '3098121224',
                'email' => 'efrenochoa@gmail.com',
                'address' => 'San sebas 87',
                'password' => '87654',
                'nss' => 'SScuyusyus',
                'rfc' => 'RFC989a88a9'
            ],
            [
                'name' => 'Yazmin',
                'lastname' =>'Rivera Juarez',
                'phone' => '8909765313',
                'email' => 'yazminjuarez@gmail.com',
                'address' => 'Javier Mina 65',
                'password' => '123',
                'nss' => 'iuisudis',
                'rfc' => 'RFC6767s'
            ],
            [
                'name' => 'Mariaylin',
                'lastname' =>'Galvez Torres',
                'phone' => '9034785810',
                'email' => 'aylin@gmail.com',
                'address' => 'Centauro 4303',
                'password' => '123',
                'nss' => 'iuisudis',
                'rfc' => 'RFC6767s'
            ],
            [
                'name' => 'Victor',
                'lastname' =>'Cibrian Cano',
                'phone' => '652763273',
                'email' => 'victor@gmail.com',
                'address' => 'Centauro 4303',
                'password' => '123',
                'nss' => 'iuisudis',
                'rfc' => 'RFC6767s'
            ],
            [
                'name' => 'Jose David',
                'lastname' =>'Rivera Juarez',
                'phone' => '652763273',
                'email' => 'david@gmail.com',
                'address' => 'Ramon Corona 12',
                'password' => '123',
                'nss' => 'iuisudis',
                'rfc' => 'RFC6767s'
            ],
            [
                'name' => 'Alfonso',
                'lastname' =>'Jimenez Sanches',
                'phone' => '652763273',
                'email' => 'alfonso@gmail.com',
                'address' => 'Centauro 4303',
                'password' => '123',
                'nss' => 'iuisudis',
                'rfc' => 'RFC6767s'
            ],
            [
                'name' => 'Frank',
                'lastname' =>'jetroDaniel@gmail.com',
                'phone' => '652763273',
                'email' => 'jetro@gmail.com',
                'address' => 'Centauro 4303',
                'password' => '123',
                'nss' => 'iuisudis',
                'rfc' => 'RFC6767s'
            ],
            [
                'name' => 'jetroDan0978',
                'lastname' =>'jetroDaniel@gmail.com',
                'phone' => '652763273',
                'email' => 'jetro@gmail.com',
                'address' => 'Centauro 4303',
                'password' => '123',
                'nss' => 'iuisudis',
                'rfc' => 'RFC6767s'
            ],
            [
                'name' => 'Frank',
                'lastname' =>'jetroDaniel@gmail.com',
                'phone' => '652763273',
                'email' => 'jetro@gmail.com',
                'address' => 'Centauro 4303',
                'password' => '123',
                'nss' => 'iuisudis',
                'rfc' => 'RFC6767s'
            ],
          
         ]);
            
    
    }
}
