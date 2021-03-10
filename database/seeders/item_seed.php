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
            'name'=>'Remote',
            'supplier_id'=>'1',
            'price'=>'10000',
            'type'=>'Electronics',
            'created_at' => Carbon::now()->toDateTimeString()
        ]);
    }
}
