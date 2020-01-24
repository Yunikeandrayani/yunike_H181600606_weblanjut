<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegumuman extends Model
{
    //
    protected $table='pengumuman';

    protected $fillable=[
        'judul','isi','users_id','kategori_berira_id'
    ];

    public function kategoripengumuman(){

        return $this->belongsTo(\App\kategoripengumuman::class,'kategori_pengumuman_id','id');
    }


    public function user (){

        return $this->belongsTo(\App\Users::class,'kategori_pengumuman_id','id');
    }
}
