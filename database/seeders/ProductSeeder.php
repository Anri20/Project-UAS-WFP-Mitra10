<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csvFile = fopen(public_path('csv/products.csv'), 'r');

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ';')) !== FALSE) {
            if (!$firstline) {
                // dd($data);

                Product::create([
                    'category_id' => $data[1],
                    'brand_id' => $data[2],
                    'nama' => $data[3],
                    'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                    'harga' => $data[5],
                    'diskon' => $data[6],
                    // 'diskon' => (rand(0, 20) / 100),
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
