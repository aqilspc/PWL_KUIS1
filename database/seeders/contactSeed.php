<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;
class contactSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_contact')->insert([
            'name' => 'aqil abd',
            'email'=>'satu@gmail.com',
            'subject'=>'ini contoh subject',
            'message'=>'ini contoh message',
            'tanggal_kirim'=>Carbon::now()->format('Y-m-d'),
            'created_at' => Carbon::now()->toDateTimeString()
        ]);
    }
}
