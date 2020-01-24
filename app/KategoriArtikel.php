<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriArtikel extends Model
{
    //
    protected $table='kategoriArtikel';

    protected $fillable=[
        'nama','users_id'
    ];

    public function Artikels(){

        return $this->hasMany(\App\kategoriArtikel::class,'kategori_artikel_id','id');
    }


    public function user (){

        return $this->belongsTo(\App\Users::class,'user_id','id');
    }

    
}
