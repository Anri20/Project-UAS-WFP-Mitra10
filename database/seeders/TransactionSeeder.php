<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\TransactionItem;
use Illuminate\Database\Seeder;

use App\Models\Review;

class TransactionSeeder extends Seeder
{
    public function run()
    {
        $num_reviews = 3;
        foreach (Customer::all() as $customer) {
            for ($i = 0; $i < random_int(0, 10); $i++) {
                $transaction = Transaction::factory()->make();
                $transaction->customer_id = $customer->idcustomers;
                $transaction->total = 0;
                $transaction->save();

                $products = Product::inRandomOrder()->limit(random_int(1, 5))->get();
                $total = 0;

                foreach ($products as $product) {
                    $item = new TransactionItem;
                    $item->transaction_id = $transaction->idtransactions;
                    $item->product_id = $product->idproducts;
                    $item->jumlah = random_int(1, 5);
                    $item->total = $product->harga * (1 - $product->diskon) * $item->jumlah;
                    $item->save();

                    $total += $item->total;

                    $random = rand(1, 5);
                    if ($random > 2 && $num_reviews > 0) {
                        $review = new Review;
                        $review->transaction_id = $transaction->idtransactions;
                        $review->product_id = $product->idproducts;
                        $review->customer_id = $customer->idcustomers;
                        $review->rating = rand(1, 5);
                        $review->ulasan = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

                        $review->save();
                        $num_reviews -= 1;
                    }
                }

                $transaction->total = $total;
                $transaction->save();
            }
        }
    }
}
