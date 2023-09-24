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
                'shop_id' => 1,
                'product_id' => 2,
                'stok' => rand(0,100)
            ]
        );

        DB::table('product_stocks')->insert(
            [
                'shop_id' => 2,
                'product_id' => 1,
                'stok' => rand(0,100)
            ]
        );

        DB::table('product_stocks')->insert(
            [
                'shop_id' => 3,
                'product_id' => 3,
                'stok' => rand(0,100)
            ]
        );
    }
}
