<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BuatTabelVitamin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('vitamin', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_vitamin', 191);
            $table->integer('harga');
            $table->string('jenis', 191);
            $table->string('fungsi', 191);
            $table->string('ukuran', 191);
            $table->date('tgl_exp');

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
        //
    }
}
