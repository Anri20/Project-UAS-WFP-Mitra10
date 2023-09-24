<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PromosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Promos')->insert(
            [
                'gambar' => 'christmassale.jpeg',
                'nama' => 'Christmass Saleee',
                'deskripsi' => 'Diskon Chirsmass',
                'kode' => rand(000,999),
                'diskon' => rand(0,99)/10
            ]
        );

        DB::table('Promos')->insert(
            [
                'gambar' => 'flashsale.jpg',
                'nama' => 'Flash Sale',
                'deskripsi' => 'Sale Cepat',
                'kode' => rand(000,999),
                'diskon' => rand(0,99)/10
            ]
        );

        DB::table('Promos')->insert(
            [
                'gambar' => 'midnightsale.jpg',
                'nama' => 'Midnight Sale',
                'deskripsi' => 'Diskon malam',
                'kode' => rand(000,999),
                'diskon' => rand(0,99)/10
            ]
        );

        DB::table('Promos')->insert(
            [
                'gambar' => 'ramadansale.png',
                'nama' => 'Ramadan',
                'deskripsi' => 'Ramadan Sale',
                'kode' => rand(000,999),
                'diskon' => rand(0,99)/10
            ]
        );

        DB::table('Promos')->insert(
            [
                'gambar' => 'sale.jpg',
                'nama' => 'Sale',
                'deskripsi' => 'Sale',
                'kode' => rand(000,999),
                'diskon' => rand(0,99)/10
            ]
        );
    }
}
