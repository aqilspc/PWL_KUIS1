<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbAbout extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_about', function (Blueprint $table) {
            $table->id();
            $table->string('thumbnail_image');
            $table->text('wording_about_satu');
            $table->text('wording_about_dua');
            $table->text('wording_about_tiga');
            $table->text('wording_about_empat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('tb_about');
    }
}
