<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductStockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_stocks')->insert(
            [
                'shop' => 4,
                'product' => 2,
                'stok' => rand(0,100)
            ]
        );

        DB::table('product_stocks')->insert(
            [
                'shop' => 5,
                'product' => 1,
                'stok' => rand(0,100)
            ]
        );

        DB::table('product_stocks')->insert(
            [
                'shop' => 6,
                'product' => 3,
                'stok' => rand(0,100)
            ]
        );
    }
}
