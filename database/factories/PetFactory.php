<?php

namespace Database\Factories;

use App\Models\Pet;
use Illuminate\Database\Eloquent\Factories\Factory;

class PetFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pet::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'type' => $this->faker->name(),
            'owner_id' => $this->faker->numberBetween(1,10),
            'date_of_birth' =>$this->faker->dateTimeThisDecade($max = 'now', $timezone = null),
            'photo' => $this->faker->imageUrl($width = 640, $height = 480),
        ];
    }
}
