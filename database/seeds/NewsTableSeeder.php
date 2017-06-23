<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
            'title' => 'Новость сайта 1',
            'text' => 'Представляем сайт построенный на Laravel',
        ]);

        DB::table('news')->insert([
            'title' => 'Новость 222',
            'text' => 'Много текста в новости №2 ',
        ]);

        DB::table('news')->insert([
            'title' => 'Новость 33333333',
            'text' => 'Много текста в новости №3 ',
        ]);
    }
}
