<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 2; $i++) {
            $user = User::factory()->create();

            $role = new Role;
            $role->role = 'owner';

            $user->roles()->save($role);
        }

        for ($i = 0; $i < 4; $i++) {
            $user = User::factory()->create();

            $role = new Role;
            $role->role = 'staff';

            $user->roles()->save($role);
        }
    }
}
