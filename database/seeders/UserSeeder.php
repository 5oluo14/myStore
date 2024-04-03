<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Client;
use App\Models\Vendor;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

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
        Client::create([
            'name' => 'عميل ',
            'email' => 'client@client.com',
            'phone' => '01030302010',
            'address' => 'شارع احمد ماهر',
        ]);
        Category::create([
            'name' => 'تصنيف'
        ]);
        Product::create([
            'name' => 'منتج',
            'description' => 'وصف المنتج الاول تيسيت 123123123',
            'quantity' => '100',
            'buying_price' => '250',
            'selling_price' => '300',
            'vendor_id' => 1,
            'category_id' => 1,
        ]);
    }
}
