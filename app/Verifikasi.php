<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Verifikasi extends Model
{
    public $timestamps = false;
    protected $table = 'pemesanantiket';
    protected $guarded = [];
}
