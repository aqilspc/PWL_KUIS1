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
         $no = rand();
        return [
                'name'=>'CV.Bukalapak ID',
                'phone'=>$no,
                'address'=>'Jalan raya jakarta barat gang sono no 8',
                'created_at' => Carbon::now()->toDateTimeString()
        ];
    }
}
