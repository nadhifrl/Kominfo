<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Pengajuan extends Model
{
    protected $table = 'pengajuan';
    protected $guarded = ['id'];

    //public function setJudulAtrribute($value)
    //{
       // $this->attributes['judul'] = Str::judul($value, '-');
    //}

    //public function getRouteKeyName()
    //{
        //return 'judul';
    //}
}
