<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;
class aboutSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $satu = '<p>Quisque vel sem eu turpis ullamcorper euismod. Praesent quis nisi ac augue luctus viverra. Sed et dui nisi. Fusce vitae dapibus justo. Pellentesque accumsan est ac posuere imperdiet. Curabitur eros mi, lacinia at euismod quis, dapibus vel ligula. Ut sodales erat vitae nunc tempor mollis. Donec tempor lobortis tortor, in feugiat massa facilisis sed. Ut dignissim viverra pretium. In eu justo maximus turpis feugiat finibus scelerisque nec eros.</p>
                        <p>
                        Classic Template provides a great flexibility to arrange the content in any way you like. Please tell your friends about templatemo. Nam sem neque, finibus id sem pharetra, cursus porttitor ligula. Praesent aliquam fermentum dui, vitae venenatis libero vulputate ac. Fusce bibendum scelerisque magna eget iaculis.</p>';

        $dua = ' <h3 class="tm-gold-text">Pellentesque fermentum mauris</h3>
                        <p>Vivamus accumsan blandit ligula. Sed lobortis efficitur sapien</p>
                        <p>Nulla ultrices nibh ac accumsan lobortis. Nulla facilisi. Praesent velit ante, congue ac dignissim in, vehicula sit amet urna. Fusce in dapibus quam, eget finibus velit. Nullam erat odio, vulputate id est ut, consequat rutrum justo. Vivamus vel leo vel nunc tincidunt mattis. Sed neque diam, semper suscipit dictum a, sodales ac metus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi vel pharetra massa, non iaculis tortor. Nulla porttitor tincidunt felis et feugiat. Vivamus fermentum ligula justo, sit amet blandit nisl volutpat id.</p>';

        $tiga =' <h3 class="tm-gold-text">Pellentesque fermentum mauris</h3>
                        <p>Vivamus vel leo vel nunc tincidunt mattis. Sed neque diam, semper suscipit dictum a, sodales ac metus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi vel pharetra massa, non iaculis tortor. Nulla porttitor tincidunt felis et feugiat.</p>
                        <p>Vivamus fermentum ligula justo, sit amet blandit nisl volutpat id. Fusce sagittis ultricies felis, non luctus mauris lacinia quis. Ut fringilla lacus ac tempor ullamcorper. Mauris iaculis placerat ex et mattis.</p>';

        $empat = ' <h3 class="tm-gold-text">Pellentesque fermentum mauris</h3>
                        <p>
                            Fusce in dapibus quam, eget finibus velit. Nullam erat odio, vulputate id est ut, consequat rutrum justo. Vivamus vel leo vel nunc tincidunt mattis. Sed neque diam, semper suscipit dictum a, sodales ac metus. Quisque vel sem eu turpis ullamcorper euismod. Praesent quis nisi ac augue luctus viverra. Sed et dui nisi.
                        </p>
                        <p>
                            Fusce vitae dapibus justo. Pellentesque accumsan est ac posuere imperdiet. Curabitur eros mi, lacinia at euismod quis, dapibus vel ligula. Ut sodales erat vitae nunc tempor mollis.
                        </p>';
         //input database                   
	       DB::table('tb_about')->insert([
	            'thumbnail_image' => url('assets/img/tm-about-img1.jpg'),
	            'wording_about_satu' => $satu,
	            'wording_about_dua' => $dua,
	            'wording_about_tiga' => $tiga,
	            'wording_about_empat'=>$empat,
	            'created_at' => Carbon::now()->toDateTimeString()
	        ]);
    }
}
