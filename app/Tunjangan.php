<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tunjangan extends Model
{
    public function karyawans()
    {
      return $this->hasMany('App\Karyawan');
    }
}
