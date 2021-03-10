<?php

namespace Database\Seeders;
use DB;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class employee_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees') ->insert([
        'name'=>'Zulfikar',
        'address'=>'Magersari',
        'phone'=>'08123102949',
        'role'=>'Manager' ,
        'created_at' => Carbon::now()->toDateTimeString()
        ]) ; 
    }
}
