<?php

namespace Database\Factories;

use App\Models\Store;
use Illuminate\Database\Eloquent\Factories\Factory;

class StoreFactory extends Factory
{
    protected $model = Store::class;

    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'avatar' => 'default-avatar.png',
            'last_online' => now()->subMinutes(rand(1, 60)),
            'ratings' => rand(1, 5),
            'followers' => rand(10, 1000),
            'joined' => $this->faker->dateTimeBetween('-5 years', 'now'),
            'response_rate' => rand(50, 100),
        ];
    }
}
