<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vitamin extends Model
{
    //mendefinisikan nama tabel
    protected $table ='vitamin';
    // mendefinisikan PK untuk tabel
    protected $primarykey = 'id';
    // Mendefinisikan kolom pada database dapat dilakukan perubahan dan penyimpanan
    protected $fillable = ['id','nama','harga','jenis','fungsi','ukuran','tgl_exp','tgl_prod','supplier'];

    protected $dates = ['tgl_exp','tgl_prod'];
}
