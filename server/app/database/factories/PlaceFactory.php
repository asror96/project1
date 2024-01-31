<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Place>
 */
class PlaceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $number=rand(-1,1);
        if($number==0)$number=1;
        return [
            'name' => fake()->streetName(),
            'longitude'=>(string)((rand(0,9999999)/10000)*$number),
            'latitude' => (string)((rand(0,9999999)/10000)*$number),
            'category_id' => rand(1,5),
            'evaluation'=>'5.0',
            'country_id'=>rand(1,100)
        ];
    }
}
