<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbHome extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('tb_home', function (Blueprint $table) {
            $table->id();
            $table->string('thumbnail_image');
            $table->text('wording_footer_satu');
            $table->text('wording_footer_dua');
            $table->text('wording_footer_tiga');
            $table->text('wording_footer_empat');
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
        Schema::dropIfExists('tb_home');
    }
}
