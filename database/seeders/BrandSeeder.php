<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Brand::truncate();

        $csvFile = fopen(public_path('csv/brands.csv'), 'r');

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ';')) !== FALSE) {
            if (!$firstline) {
                Brand::create([
                    'nama' => $data[1],
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
