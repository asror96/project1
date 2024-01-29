<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PhotoUser>
 */
class PhotoUserFactory extends Factory
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

    public function photosUser(int $id)
    {
        return $this->state(function (array $attributes)use($id){
            return[
                'user_id'=>$id,
                'photo'=>('user_photo_name')
            ];
        });
    }
}
