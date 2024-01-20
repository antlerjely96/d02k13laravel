<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RoleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //Định nghĩa các trường sẽ được fake như nào
        return [
            'name' => $this->faker->name,
        ];
    }
}
