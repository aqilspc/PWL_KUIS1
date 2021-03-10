<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;
class categorySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('tb_category')->insert([
            'name' => 'nama kategory',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);
    }
}
