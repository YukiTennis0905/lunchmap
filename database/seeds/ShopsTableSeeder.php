<?php

use Illuminate\Database\Seeder;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'パイザ亭',
            'address' => '東京都港区北青山',
            'category_id' => '1',
            'user_id' => 1,
        ];
        
        DB::table('shops')->insert($param);
        $param = [
            'name' => 'ラーメンLaravel',
            'address' => '東京都港区東青山',
            'category_id' => '2',
            'user_id' => 1,
        ];
        DB::table('shops')->insert($param);

        $param = [
            'name' => 'そばの霧島',
            'address' => '東京都港区南青山',
            'category_id' => '3',
            'user_id' => 1,
        ];
        DB::table('shops')->insert($param);

    }
}
