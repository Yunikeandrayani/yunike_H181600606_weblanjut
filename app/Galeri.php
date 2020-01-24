<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    //
    protected $table='galeri';

    protected $fillable=[
        'judul','isi','users_id','kategori_galeri_id'
    ];

    public function kategoriGaleri(){

        return $this->belongsTo(\App\kategoriGaleri::class,'kategori_galeri_id','id');
    }


    public function user (){

        return $this->belongsTo(\App\Users::class,'kategori_galeri_id','id');
    }
}
