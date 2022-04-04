<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nameCompany' =>  $this->faker->company(),
            'adresse' => $this->faker->streetName(),
            'postalcode' => $this->faker->postcode(),
            'doornumber' => $this->faker->buildingNumber(),
            'telephone' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->companyEmail(),
            'name' => $this->faker->lastName(),
            'firstname' => $this->faker->firstName(),
            'src' => $this->faker->imageUrl()
        ];
    }
}
