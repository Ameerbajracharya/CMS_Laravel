<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            [
        		'name' => 'admin',
                'email' => 'admin@gmail.com',
                'user_type' => 'superadmin',
                'password' => bcrypt('admin'),
                'remember_token' => '_token',
            ],


        ]);
    }
}
