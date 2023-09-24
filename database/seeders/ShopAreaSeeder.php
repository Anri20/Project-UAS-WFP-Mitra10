<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ShopAreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shop_areas')->insert(
            [
                'nama' => 'Jakarta Timut',
            ]
        );

        DB::table('shop_areas')->insert(
            [
                'nama' => 'Jawa Barat',
            ]
        );

        DB::table('shop_areas')->insert(
            [
                'nama' => 'Jakarta Barat',
            ]
        );
    }
}
