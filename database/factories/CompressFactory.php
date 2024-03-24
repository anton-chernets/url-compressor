<?php

namespace Database\Factories;

use App\Models\Compress;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Compress>
 */
class CompressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Compress::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'url' => $this->faker->url(),
            'token' => $this->faker->regexify('[A-Z]{5}[0-4]{3}'),
            'available_count' => 1,
            'expired_at' => now()->addHour(),
        ];
    }
}
