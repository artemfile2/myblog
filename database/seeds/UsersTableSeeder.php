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
        DB::table('users')->insert([
            'name' => 'test',
            'email' => 'zxc@mail.ru',
            'password' => bcrypt('12345'),
        ]);
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@mail.ru',
            'password' => bcrypt('12345'),
        ]);
    }
}
