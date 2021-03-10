<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShoppingCartTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('menu', function (Blueprint $table) {
            $table->increments('id');
            $table->varchar('nama');
            $table->text('deskripsi');
            $table->enum('kategori',['makanan','minuman']);
            $table->float('harga');
            $table->string('foto');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('menu');
    }
}
