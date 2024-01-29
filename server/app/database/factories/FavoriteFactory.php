<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Favorite>
 */
class FavoriteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
        ];
    }

    public function userFavorites(int $id)
    {
        return $this->state(function (array $attributes)use($id){
            return[
                'user_id'=>$id,
                'place_id'=>$id,
                'travel_date'=>fake()->date()
            ];
        });
    }
}
