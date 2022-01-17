<?php

use Illuminate\Database\Seeder;
use App\User;
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
        $admin = User::create([
            'first_name' => 'Admin',
            'last_name' => 'Skpr',
            'email' => 'admin@skpr.asia',
            'password' => Hash::make('AdminSkpr123!'),
        ]);

        $admin->assignRole('admin');
    }
}
