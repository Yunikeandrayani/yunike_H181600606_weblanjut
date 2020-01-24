<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriBerita extends Model
{
    //
    protected $table='kategoriBerita';

    protected $fillable=[
        'nama','users_id'
    ];

    public function Beritas(){

        return $this->hasMany(\App\kategoriBerita::class,'kategori_berita_id','id');
    }


    public function user (){

        return $this->belongsTo(\App\Users::class,'user_id','id');
    }

}
