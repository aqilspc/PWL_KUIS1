<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;
class CustomerSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('customers')->insert(
         	[
         		'name'=>'Abdulloh Aqil'
         		,'phone'=>'085990814123'
         		,'address'=>'Jalan raya borobudur agung timur no 100 gang 10 pasuruan jawatimur',
         		'created_at' => Carbon::now()->toDateTimeString()

         	]
         );
    }
}
