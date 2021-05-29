<?php

namespace Database\Factories\Modules\Customer\Domain\Models;

use App\Modules\Customer\Domain\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'phone_number' => $this->faker->phoneNumber(), // password
            'email' => $this->faker->email(),
            'agent_id' => $this->faker->randomElement([1, 5, 7, null]),
            'status' => '0'
        ];
    }
}
