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
                'gambar' => 'image/batman.jpg',
                'nama' => 'Action Figure',
                'deskripsi' => 'Diskon Batman Warframe',
                'kode' => rand(000,999),
                'diskon' => rand(0,99)/10
            ]
        );

        DB::table('Promos')->insert(
            [
                'gambar' => 'image/infinity.png',
                'nama' => 'Infitiy',
                'deskripsi' => 'GAS POLL',
                'kode' => rand(000,999),
                'diskon' => rand(0,99)/10
            ]
        );

        DB::table('Promos')->insert(
            [
                'gambar' => 'image/Guru.jpg',
                'nama' => 'Guru',
                'deskripsi' => 'Diskon Sekolah',
                'kode' => rand(000,999),
                'diskon' => rand(0,99)/10
            ]
        );

        DB::table('Promos')->insert(
            [
                'gambar' => 'image/joker.jpg',
                'nama' => 'joker',
                'deskripsi' => 'Diskon Lawak',
                'kode' => rand(000,999),
                'diskon' => rand(0,99)/10
            ]
        );

        DB::table('Promos')->insert(
            [
                'gambar' => 'image/tidakbisa.jpg',
                'nama' => 'tidak bisa',
                'deskripsi' => 'bebas',
                'kode' => rand(000,999),
                'diskon' => rand(0,99)/10
            ]
        );
    }
}
