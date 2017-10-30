<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = [
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'codigo' => '1234qwer',
            'job_title' => 'admin',
            'password' => bcrypt('password')
        ];

        DB::table('admins')->insert($admin);
    }
}
