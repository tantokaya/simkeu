<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unitkerja extends Model
{
    public function karyawans()
    {
      return $this->hasMany('App\Karyawan');
    }
}
