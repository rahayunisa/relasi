<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orangtua extends Model
{
    //
    protected $table = 'orangtuas';
    protected $fillable = ['namaibu','namaayah','umuribu','umurayah','alamat'];
    protected $visible = ['namaibu','namaayah','umuribu','umurayah','alamat'];
    public $timestamps = true;

    public function anak () {
    	return $this->hasMany('App\anak', 'orangtua_id');
    }
}
