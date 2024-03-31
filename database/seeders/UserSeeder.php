<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Vendor;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('123'),
        ]);

        Vendor::create([
            'name' => 'مورد ',
            'email' => 'vendor@vendor.com',
            'phone' => '01030302010',
            'address' => 'شارع احمد ماهر',
        ]);
    }
}
