<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;
class blogSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $title = 'ini contoh judul blog';
         DB::table('tb_blog')->insert([
            'thumbnail_image' => url('assets/img/tm-home-img1.jpg'),
            'category_id' => 1,
            'slug'=>str_replace(' ', '-', $title),
            'judul' => $title,
            'isi' => 'ini contoh isi blog',
            'tanggal_publish'=>Carbon::now()->format('Y-m-d'),
            'author'=>'aqil',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);
    }
}
