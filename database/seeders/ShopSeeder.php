<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert(
            [
                'shop_area_id' => 1,
                'nama' => 'Cibubur',
                'nomor_whatsapp' => rand(00000000,99999999),

            ]
        );

        DB::table('shops')->insert(
            [
                'shop_area_id' => 2,
                'nama' => 'Iskandar Bogo',
                'nomor_whatsapp' => rand(00000000,99999999),

            ]
        );

        DB::table('shops')->insert(
            [
                'shop_area_id' => 3,
                'nama' => 'Daan Mogot',
                'nomor_whatsapp' => rand(00000000,99999999),

            ]
        );

        DB::table('shops')->insert(
            [
                'shop_area_id' => 3,
                'nama' => 'maju',
                'nomor_whatsapp' => rand(00000000,99999999),

            ]
        );

        DB::table('shops')->insert(
            [
                'shop_area_id' => 2,
                'nama' => 'BMC',
                'nomor_whatsapp' => rand(00000000,99999999),

            ]
        );
    }
}
