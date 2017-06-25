<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'title' => 'Lorem какой-то!',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid animi error, et incidunt, nemo nobis perferendis possimus quia quibusdam quos sed sunt veritatis! Blanditiis enim eos eum incidunt voluptas voluptatem!',
            'idUser' => 1,
            'created_at' => date('Y.m.d H:i:s'),
        ]);

        DB::table('articles')->insert([
            'title' => 'Заголовок статьи',
            'text' => 'Очень много текста в статье про lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'idUser' => 2,
            'created_at' => date('Y.m.d H:i:s'),
        ]);
    }
}
