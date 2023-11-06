<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Role;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BrandSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(ProductSeeder::class);
        
        $this->call(CustomerSeeder::class);
        $this->call(CartSeeder::class);
        $this->call(TransactionSeeder::class);

        $this->call(ReviewSeeder::class);
        $this->call(PromoSeeder::class);

        $this->call(ShopAreaSeeder::class);
        $this->call(ShopSeeder::class);
        $this->call(ProductStockSeeder::class);

        $this->call(RoleSeeder::class);
        $this->call(RoleUserSeeder::class);
    }
}
