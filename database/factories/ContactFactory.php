<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name() ,
            'phone' => $this->faker->phoneNumber() ,
            'email' => $this->faker->unique()->safeEmail() ,
            'massege' => $this->faker->words(10 , true) ,
            'image' => 'SiteFive_1745938018_395017681.png' ,
        ];
    }
}
