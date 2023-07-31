<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone_number' => $this->faker->unique()->phoneNumber(),
            'identification_number' => $this->faker->unique()->numberBetween(1000000000, 9999999999),
            'gender' => $this->faker->randomElement(['Male', 'Female', 'Other']),
            'date_of_birth' => $this->faker->date(),
            'country' => $this->faker->country(),
            'province' => $this->faker->state(),
            'city' => $this->faker->city(),
            'street_address' => $this->faker->streetAddress(),
            'zipcode' => $this->faker->postcode(),
            'about' => $this->faker->text(),
        ];
    }
}
