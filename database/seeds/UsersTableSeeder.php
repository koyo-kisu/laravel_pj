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
        $param = [
            'user_id' => '1',
            'user_name' => 'Taro',
            'password' => 'abcd',
        ];
        DB::table('users')->insert($param);

        $param = [
            'user_id' => '2',
            'user_name' => 'Kaji',
            'password' => '1234',
        ];
        DB::table('users')->insert($param);

        $param = [
            'user_id' => '3',
            'user_name' => 'Hiro',
            'password' => 'qwerty',
        ];
        DB::table('users')->insert($param);
    }
}
