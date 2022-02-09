<?php

namespace Database\Seeders;

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
        for ($i=0; $i < 100; $i++) {

            $user = User::factory()->create();
             // Adding permissions via a role
             $user->assignRole('voter');

        }

        $admin = User::factory()->create([
            'email' => 'admin@e-vote.com'
        ]);

        $admin->assignRole('admin');
    }
}
