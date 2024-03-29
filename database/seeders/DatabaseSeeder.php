<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CompaniesTableSeeder::class);
        $this->call(BranchesTableSeeder::class);
        $this->call(StatusUsersTableSeeder::class);
        $this->call(StatusOrdersTableSeeder::class);
        $this->call(MachinesTableSeeder::class);
        $this->call(SparepartsTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
    }
}
