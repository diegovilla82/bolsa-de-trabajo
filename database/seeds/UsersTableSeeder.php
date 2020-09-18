<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'Diego Villa',
            'email' => 'd@gmail.com',
            'password' => Hash::make('password')

        ]);

        Role::create([
            'name' => 'Admin',
            'slug' => 'admin',
            'special' => 'all-access'

        ]);

        factory(App\User::class, 29)->create();
    }
}
