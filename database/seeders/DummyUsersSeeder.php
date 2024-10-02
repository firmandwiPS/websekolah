<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usersData = [
            [
                'name' => 'siswa',
                'email' => 'siswa@gmail.com',
                'role' => 'siswa',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'guru',
                'email' => 'guru@gmail.com',
                'role' => 'guru',
                'password' => bcrypt('123456'),
            ],
            
        ];

        foreach ($usersData as $key => $val) {
            User::create($val);
        }
    }
}
