<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;
class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
                'name'=>'Firman Pratama Dewantara'
                ,'phone'=>'081880015123'
                ,'address'=>'Jalan raya karang ploso wetan no 90 gang 10 bangil pasuruan jawatimur'
                ,'created_at' => Carbon::now()->toDateTimeString()
        ];
    }
}
