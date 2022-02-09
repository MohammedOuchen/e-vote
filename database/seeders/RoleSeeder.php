<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'voter',
            'guard_name' => config('auth.defaults.guard')
        ]);
        Role::create([
            'name' => 'condidate',
            'guard_name' => config('auth.defaults.guard')
        ]);
        Role::create([
            'name' => 'admin',
            'guard_name' => config('auth.defaults.guard')
        ]);
    }
}
