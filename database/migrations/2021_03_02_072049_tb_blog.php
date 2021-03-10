<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbBlog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_blog', function (Blueprint $table) {
            $table->id();
            $table->string('thumbnail_image');
            $table->integer('category_id');
            $table->string('judul');
            $table->text('isi');
            $table->date('tanggal_publish');
            $table->string('author');
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
       Schema::dropIfExists('tb_blog');
    }
}
