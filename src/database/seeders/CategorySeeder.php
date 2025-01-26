<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['name' => '商品の交換について'],
            ['name' => '返品について'],
            ['name' => '配送について'],
            ['name' => '支払い方法について'],
            ['name' => 'その他'],
        ];

        DB::table('categories')->insert($categories);
    }
}
