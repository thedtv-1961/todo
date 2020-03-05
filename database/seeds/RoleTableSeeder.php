<?php

use App\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            Role::ADMIN,
            Role::STAFF,
            Role::CLIENT,
        ];

        foreach ($roles as $role) {
            Role::firstOrCreate(['name' => $role, 'guard_name' => 'web']);
        }
    }
}
