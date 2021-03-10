<?php

namespace Database\Factories;

use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;
class SupplierFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Supplier::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
                'name'=>'CV.Bukalapak ID',
                'phone'=>'089909876123',
                'address'=>'Jalan raya jakarta barat gang sono no 8',
                'created_at' => Carbon::now()->toDateTimeString()
        ];
    }
}
