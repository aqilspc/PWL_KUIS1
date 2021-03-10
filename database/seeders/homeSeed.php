<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;
class homeSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$satu = ' <p>Classic is free HTML CSS website template provided by templatemo for everyone. Feel free to use it.</p>
                                <p>Aenean cursus tellus mauris, quis consequat mauris dapibus id. Donec scelerisque porttitor pharetra.</p>
                                <p><strong>Danny Egg (Executive)</strong></p>';
        $dua = ' <li><a href="#" class="tm-footer-link">Tincidunt non faucibus</a></li>
                                    <li><a href="#" class="tm-footer-link">Vestibulum tempor</a></li>
                                    <li><a href="#" class="tm-footer-link">Fusce non turpis euismod</a></li>
                                    <li><a href="#" class="tm-footer-link">Lorem ipsum dolor sit</a></li>
                                    <li><a href="#" class="tm-footer-link">Nam in augue consectetur</a></li>
                                    <li><a href="#" class="tm-footer-link">Text Link Color #CCCC66</a></li>';
        $tiga =' <p class="tm-margin-b-30">Aenean cursus tellus mauris, quis consequat mauris dapibus id. Donec scelerisque porttitor pharetra.</p><hr class="tm-margin-b-30">
                            <p class="tm-margin-b-30">Aenean cursus tellus mauris, quis consequat mauris dapibus id. Donec scelerisque porttitor pharetra.</p><hr class="tm-margin-b-30">
                            <p class="tm-margin-b-30">Aenean cursus tellus mauris, quis consequat mauris dapibus id. Donec scelerisque porttitor pharetra.</p>
                            <a href="#" class="tm-btn tm-btn-gray text-uppercase">Read More</a>';
        $empat = '<h3 class="tm-gold-text tm-title tm-footer-content-box-title">Barbar</h3>
                            <p class="tm-margin-b-20">Curabitur dui massa, aliquam quis mi sed, tempor vulputate tellus. Sed vestibulum non neque.</p>
                            <a href="#" class="tm-btn tm-btn-gray text-uppercase">Browse</a>';
         //input database                   
       DB::table('tb_home')->insert([
            'thumbnail_image' => url('assets/img/tm-home-img1.jpg'),
            'wording_footer_satu' => $satu,
            'wording_footer_dua' => $dua,
            'wording_footer_tiga' => $tiga,
            'wording_footer_empat'=>$empat,
            'created_at' => Carbon::now()->toDateTimeString()
        ]);
    }
}
