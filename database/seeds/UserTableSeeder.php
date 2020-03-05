<?php

use App\Role;
use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            $user = factory(User::class)->create();

            if ($i < 2) {
                $user->assignRole(Role::ADMIN);
            }

            if ($i >= 2 && $i < 4) {
                $user->assignRole(Role::STAFF);
            }

            if ($i >= 4) {
                $user->assignRole(Role::CLIENT);
            }
        }
    }
}
