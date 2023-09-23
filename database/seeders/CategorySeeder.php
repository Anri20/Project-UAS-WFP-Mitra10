<?php

namespace Database\Seeders;

use App\Models\Category;
use Hamcrest\Text\IsEmptyString;
use Illuminate\Database\Seeder;
use PHPUnit\Framework\Constraint\IsEmpty;

use function PHPUnit\Framework\isEmpty;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Category::truncate();

        $csvFile = fopen(public_path('csv/categories.csv'), 'r');

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ';')) !== FALSE) {
            if (!$firstline) {
                // dd($data);

                if ($data[2] == "") {
                    $data[2] = null;
                }

                Category::create([
                    'nama' => $data[1],
                    'parent_category' => $data[2],
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
