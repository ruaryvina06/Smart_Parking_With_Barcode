<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $data = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'password' => Hash::make('admin')
            ],
            [
                'name' => 'Pelanggan',
                'email' => 'pelanggan@gmail.com',
                'role' => 'pelanggan',
                'password' => Hash::make('pelanggan')
            ],
        ];
        foreach ($data as $d) {
            User::create($d);
        }
    }
}
