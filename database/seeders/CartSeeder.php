<?php

namespace Database\Seeders;

use App\Models\Cart;
use App\Models\Customer;
use App\Models\Product;
use Illuminate\Database\Seeder;

class CartSeeder extends Seeder
{
    public function run()
    {
        foreach (Customer::all() as $customer) {
            $products = Product::inRandomOrder()->limit(random_int(0, 5))->get();
            foreach ($products as $product) {
                $cart = new Cart;
                $cart->customer_id = $customer->idcustomers;
                $cart->product_id = $product->idproducts;
                $cart->jumlah = random_int(1, 3);
                $cart->save();
            }
        }
    }
}
