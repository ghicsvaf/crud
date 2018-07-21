<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'TungNguyen',
            'email' =>'ghicsvafdgf@gmail.com',
            'password' =>bcrypt('123456'),
        ]);

    }
}
