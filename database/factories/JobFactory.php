<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Job;

class JobFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Job::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'customer_id' => $this->faker->numberBetween(-100000, 100000),
            'job_id' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'type' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'issue_described' => $this->faker->regexify('[A-Za-z0-9]{1000}'),
            'issue_found' => $this->faker->regexify('[A-Za-z0-9]{1000}'),
            'status' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'complemetion_date' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'price' => $this->faker->randomFloat(2, 0, 999999.99),
            'note' => $this->faker->regexify('[A-Za-z0-9]{2000}'),
        ];
    }
}
