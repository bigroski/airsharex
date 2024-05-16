<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Role::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        $roles = [
            [
                'name' => 'Super Admin',
                'guard_name' => 'web'
            ], [
                'name' => 'Admin',
                'guard_name' => 'web'

            ], [
                'name' => 'Content Writer',
                'guard_name' => 'web'

            ], [
                'name' => 'Customer',
                'guard_name' => 'web'

            ],
        ];
        Role::insert($roles);
    }
}
