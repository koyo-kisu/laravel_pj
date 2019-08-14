<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'title' => '走れメロス',
            'author' => '太宰治',
            'publisher' => '新潮文庫',
            'description' => 'texttexttexttexttexttexttext',
        ];
        DB::table('books')->insert($param);

        $param = [
            'title' => '潮騒',
            'author' => '三島由紀夫',
            'publisher' => '新潮文庫',
            'description' => 'texttexttexttexttexttexttext',
        ];
        DB::table('books')->insert($param);


        $param = [
            'title' => 'モモ',
            'author' => 'ミヒャエル・エンデ',
            'publisher' => '岩波少年文庫',
            'description' => 'texttexttexttexttexttexttext',
        ];
        DB::table('books')->insert($param);


        $param = [
            'title' => '思い出トランプ',
            'author' => '向田邦子',
            'publisher' => '新潮文庫',
            'description' => 'texttexttexttexttexttexttext',
        ];
        DB::table('books')->insert($param);


        $param = [
            'title' => '父が娘に語る経済の話',
            'author' => 'ヤニス・バルファキス',
            'publisher' => 'ダイヤモンド社',
            'description' => 'texttexttexttexttexttexttext',
        ];
        DB::table('books')->insert($param);
    }
}
