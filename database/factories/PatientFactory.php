<?php

namespace Database\Factories;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;

class PatientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Patient::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gender = $this->faker->randomElement(['male', 'female']);
        $dob = $this->faker->date($format = 'Y-m-d', $max = 'now');

        return [
            'firstname' => $this->faker->firstName(),
            'lastname' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'gender' => $gender,
            'phone' => $this->faker->unique()->phoneNumber,
            'gender' => $gender,
            'address' => $this->faker->address,
            'dob' => $dob
        ];
    }
}
