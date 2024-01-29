<?php

namespace Database\Factories;

use App\Models\PhotoPlace;
use App\Models\Place;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PhotoPlace>
 */
class PhotoPlaceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public $i;

    public function definition(): array
    {

        return [



        ];
    }
    public function withPlace(int $id)
    {
        return $this->state(function (array $attributes)use($id){
            return[
                'place_id'=>$id,
                'photo'=>('photo_name')
            ];
        });
    }

}
