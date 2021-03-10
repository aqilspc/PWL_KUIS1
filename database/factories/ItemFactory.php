<?php

namespace Database\Factories;
use carbon\carbon;
use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Item::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Name'=>'Remote',
            'Price'=>'10000',
            'Type'=>'Electronics',
            'created_at' => Carbon::now()->toDateTimeString()
        ];
    }
}
