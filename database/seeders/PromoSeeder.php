<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PromoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gambar = ['christmassale.jpeg', 'flashsale.jpg', 'midnightsale.jpg', 'ramadansale.png', 'sale.jpg'];
        $nama = ['Christmass Saleee', 'Flash Sale', 'Midnight Sale', 'Ramadan', 'Sale'];
        $deskripsi = ['Diskon Chirsmass', 'Sale Cepat', 'Diskon malam', 'Ramadan Sale', 'Sale'];

        for ($i = 0; $i < sizeof($gambar); $i++) {
            DB::table('promos')->insert(
                [
                    'gambar' => $gambar[$i],
                    'nama' => $nama[$i],
                    'deskripsi' => $deskripsi[$i],
                    'kode' => rand(000, 999),
                    'diskon' => rand(0, 99) / 10
                ]
            );
        }
    }
}
