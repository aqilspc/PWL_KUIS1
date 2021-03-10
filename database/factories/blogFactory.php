<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;
class blogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Blog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = 'ini contoh judul blog';
         return [
            'thumbnail_image' => url('assets/img/tm-home-img1.jpg'),
            'category_id' => 1,
            'judul' => $title,
            'isi' => 'ini contoh isi blog',
            'slug'=>str_replace(' ', '-', $title),
            'tanggal_publish'=>Carbon::now()->format('Y-m-d'),
            'author'=>'aqil',
            'created_at' => Carbon::now()->toDateTimeString()
        ];
    }
}
