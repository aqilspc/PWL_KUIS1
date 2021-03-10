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
         $no = rand();
        return [
            'name'=>'Mouse',
            'supplier_id'=>'2',
            'price'=>$no.'.00',
            'type'=>'Electronics',
            'created_at' => Carbon::now()->toDateTimeString()
        ];
    }
}
