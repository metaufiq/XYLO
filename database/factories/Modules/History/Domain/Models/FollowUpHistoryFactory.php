<?php

namespace Database\Factories\Modules\History\Domain\Models;

use App\Modules\History\Domain\Models\FollowUpHistory;
use Illuminate\Database\Eloquent\Factories\Factory;

class FollowUpHistoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = FollowUpHistory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'customer_id' => $this->faker->randomElement([1, 5, 7]),
            'agent_id' => $this->faker->randomElement([1, 5, 7]),
            'status_id' => $this->faker->randomElement([1, 2, 3, 4])
        ];
    }
}
