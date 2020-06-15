<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'イタリアン',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'name' => '中華',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'name' => '和食',
        ];
        DB::table('categories')->insert($param);

    }
}
