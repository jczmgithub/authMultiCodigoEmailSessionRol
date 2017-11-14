<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'usuAdmin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('password'),
                'activated' => true,
                'admin' => true
            ],
            [
                'name' => 'usuUsu',
                'email' => 'usu@usu.com',
                'password' => bcrypt('password'),
                'activated' => true,
                'admin' => false
            ],
        ];

        DB::table('users')->insert($users);
    }
}
