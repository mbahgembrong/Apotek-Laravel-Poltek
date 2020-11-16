<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BuatTableObat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('obat', function (Blueprint $table) {
            $table->id();
            $table->string('nama_obat');
            $table->integer('harga');
            $table->string('jenis');
            $table->date('tgl_prod');
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
