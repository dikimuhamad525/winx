<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create ([
            'name' => 'diki',
            'username' => 'diki',
            'password' => bcrypt('dikiid52505')
        ]);
    }
}
