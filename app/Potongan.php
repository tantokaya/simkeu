<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Potongan extends Model
{
    public function karyawans()
    {
      return $this->hasMany('App\Karyawan');
    }
}
