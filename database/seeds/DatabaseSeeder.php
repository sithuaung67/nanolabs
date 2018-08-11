<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


       DB::table('users')->insert(
            [
                'name' => "admin",
                'full_name'=>'Administrator',
                'email' => "admin@ntg-res",
                'password' => bcrypt('password'),

            ]
        );

    }
}
