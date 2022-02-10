<?php

namespace Database\Seeders;

use App\Models\Request;
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
        for ($i=0; $i < 10; $i++) {

            $user = User::factory()->create();
             // Adding permissions via a role
            $user->assignRole('voter');

            $request = Request::create([
                'type' => 'vote',
                'status' => 'IN_PROGRESS',
                'user_id' => $user->id
            ]);

        }

        $admin = User::factory()->create([
            'email' => 'admin@e-vote.com'
        ]);

        $admin->assignRole('admin');
    }
}
