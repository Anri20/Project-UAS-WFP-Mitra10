<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            $customer = Customer::factory()
                ->create();

            $user = User::factory()
                ->state([
                    'name' => "$customer->nama_depan $customer->nama_belakang",
                    'email' => $customer->email,
                    'phone' => $customer->nomor_whatsapp,
                    'customer_id' => $customer->idcustomers,
                ])
                ->create();

            $role = new Role;
            $role->role = 'customer';

            $user->roles()->save($role);
        }
    }
}
