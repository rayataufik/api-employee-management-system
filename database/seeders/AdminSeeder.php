<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'name' => 'Muhammad Raya Taufik',
            'username' => 'admin',
            'phone' => '082153941209',
            'email' => 'admin@email.com',
            'password' => Hash::make('pastibisa')
        ]);
    }
}
