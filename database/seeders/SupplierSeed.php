<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;
class SupplierSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suppliers')->insert(
        	[

        		'name'=>'CV.Intermediatech ID',
        		'phone'=>'085608014111',
        		'address'=>'Jalan raya borobudur agung timur no 01 gang 8 malang jawatimur',
        		'created_at' => Carbon::now()->toDateTimeString()

        	]
        );
    }
}
