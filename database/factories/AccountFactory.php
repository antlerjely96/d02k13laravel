<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class AccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'img' => $this->faker->imageUrl,
            'address' => $this->faker->address,
            'email' => $this->faker->email,
            'password' => $this->faker->password,
            'phone_number' => $this->faker->e164PhoneNumber,
            'role_id' => $this->faker->randomElement(DB::table('roles')->pluck('id')),
        ];
    }
}
