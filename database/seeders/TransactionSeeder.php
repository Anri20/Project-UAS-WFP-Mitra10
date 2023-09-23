<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\TransactionItem;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    public function run()
    {
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
                }

                $transaction->total = $total;
                $transaction->save();
            }
        }
    }
}
