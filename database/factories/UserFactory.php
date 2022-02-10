<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => Hash::make("Password-1234"), // password
            'date_of_birth' => Carbon::parse($this->faker->dateTimeBetween('1970-01-01', '2000-12-31')),
            'telephone' => $this->faker->unique()->phoneNumber,
            'num_carte_national' => $this->faker->randomNumber,
            'gender' => $this->faker->randomElement(['man', 'women']),
            'country' => $this->faker->country,
            'city' => $this->faker->city,
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
