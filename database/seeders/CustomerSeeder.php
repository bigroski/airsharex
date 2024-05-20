<?php

namespace Database\Seeders;
use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $adminRole = Role::find(1);
	    $customer = User::factory()->create([
	        'email' => 'customer@system.com',
	        'password' => bcrypt('password')
    	]);
        $customer->assignRole('Customer');
    }
}
