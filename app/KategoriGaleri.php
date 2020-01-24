<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriGaleri extends Model
{
    //
    protected $table='kategoriGaleri';

    protected $fillable=[
        'nama','users_id'
    ];

    public function Galeris(){

        return $this->hasMany(\App\kategoriGaleri::class,'kategori_galeri_id','id');
    }


    public function user (){

        return $this->belongsTo(\App\Users::class,'user_id','id');
    }

}
