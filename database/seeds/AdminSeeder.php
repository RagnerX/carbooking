<?php

use App\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => "Admin",
            'email' => 'admin@email.com',
            'password' => bcrypt('123456789'),
        ]);

        $admin->assignRole('admin');
    }
}
