<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'name'     => 'Foo',
            'email'    => 'admin@admin.com',
            'password' => bcrypt('password'),
        ]);
    }
}
