<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $adminRole = Role::find(1);
        $adminUser = User::find(1);
        if (!$adminUser) {
            $adminUser = User::factory()->create([
                'email' => 'admin@system.com',
                'password' => bcrypt('password')
            ]);
        }
        $adminUser->assignRole('Super Admin');
    }
}
