<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;
class contactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'aqil abd',
            'email'=>'satu@gmail.com',
            'subject'=>'ini contoh subject',
            'message'=>'ini contoh message',
            'tanggal_kirim'=>Carbon::now()->format('Y-m-d'),
            'created_at' => Carbon::now()->toDateTimeString()
        ];
    }
}
