<?php

namespace Database\Factories;

use App\Models\Dosen;
use App\Models\Ktd;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ktd>
 */
class KtdFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Ktd::class;
    public function definition(): array
    {
        return [
            'id_dosen' => $this->faker->unique()->numberBetween(1, 10),
            'nomor_identitas' => $this->faker->unique()->numerify('KTD#####')
        ];
    }
}
