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
            'name' => '鈴村悠輝',
            'email' => 'yuki@gmail.com',
            'password' => bcrypt('11111111'),
        ];
        DB::table('users')->insert($param);

        
    }
}
