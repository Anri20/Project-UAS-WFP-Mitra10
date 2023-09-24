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
                'shop_area' => 5,
                'nama' => 'Cibubur',
                'nomor_whatsapp' => rand(00000000,99999999),

            ]
        );

        DB::table('shops')->insert(
            [
                'shop_area' => 6,
                'nama' => 'Iskandar Bogo',
                'nomor_whatsapp' => rand(00000000,99999999),

            ]
        );

        DB::table('shops')->insert(
            [
                'shop_area' => 7,
                'nama' => 'Daan Mogot',
                'nomor_whatsapp' => rand(00000000,99999999),

            ]
        );

        DB::table('shops')->insert(
            [
                'shop_area' => 6,
                'nama' => 'maju',
                'nomor_whatsapp' => rand(00000000,99999999),

            ]
        );

        DB::table('shops')->insert(
            [
                'shop_area' => 7,
                'nama' => 'BMC',
                'nomor_whatsapp' => rand(00000000,99999999),

            ]
        );
    }
}
