<?php

namespace Database\Seeders;

use App\Models\Kelas;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name'     => 'aswarkasim',
            'email'    => 'aswarkasim@gmail.com',
            'role'     => 'guru',
            'password' => bcrypt('password')
        ]);

        Kelas::create([
            'name'     => 'Seni Budaya',
            'user_id'  => '1',
            'cover'    => '',
            'desc'     => 'lorem ipsum dolor sit amet',
            'kontrak'  => 'lorem ipsum dolor sit amet',
            'is_active' => 0
        ]);
    }
}
