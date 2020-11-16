<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    //mendefinisikan nama tabel
    protected $table ='obat';
    // mendefinisikan PK untuk tabel
    protected $primarykey = 'id';
    // Mendefinisikan kolom pada database dapat dilakukan perubahan dan penyimpanan
    protected $fillable = ['id','nama','harga','jenis','tgl_exp','supplier'];

    protected $dates = ['tgl_exp'];
}
