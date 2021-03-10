<?php

namespace Database\Seeders;
use DB;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class item_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            'Name'=>'Remote',
            'Price'=>'10000',
            'Type'=>'Electronics',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);
    }
}
