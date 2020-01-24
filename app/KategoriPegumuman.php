<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriPegumuman extends Model
{
    //
    protected $table='kategoripengumuman';

    protected $fillable=[
        'nama','users_id'
    ];

    public function pengumumans(){

        return $this->hasMany(\App\kategoripengumuman::class,'kategori_pengumuman_id','id');
    }


    public function user (){

        return $this->belongsTo(\App\Users::class,'user_id','id');
    }

}
