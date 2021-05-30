<?php

namespace Database\Factories\Modules\Customer\Domain\Models;

use App\Modules\Customer\Domain\Models\Customer;
use App\Modules\Customer\Domain\Models\FollowUpStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

class FollowUpStatusFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = FollowUpStatus::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'status' => $this->faker->unique()->randomElement(['uncontacted', 'pending', 'qualified', 'lost'])
        ];
    }
}
