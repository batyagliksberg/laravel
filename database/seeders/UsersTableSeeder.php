<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;

final class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'User1',
            'email' => 'user1@email.com',
            'password' => bcrypt('password'),
            'phone' => '0556787898',
            'address' => 'ashdod',
            'site' => 'arad',
            'url' => 'http://',
        ]);
    }
}
