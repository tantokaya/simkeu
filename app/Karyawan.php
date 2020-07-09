<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    public function golongan()
    {
      return $this->belongsTo('App\Golongan'); 
    }
}
