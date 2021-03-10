<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;
use carbon\carbon;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>'Zulfikar',
            'address'=>'Magersari',
            'phone'=>'08123102949',
            'role'=>'Developer' ,
            'created_at' => Carbon::now()->toDateTimeString()
            ];
    }
}
