<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'article_id' => 1,
            'user_id' => 1,
            'comment' => 'Текст коментария 1',
            'created_at' => date('Y.m.d H:i:s'),
        ]);
    }
}
