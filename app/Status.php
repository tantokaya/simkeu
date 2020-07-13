<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
  public function karyawans()
  {
    return $this->hasMany('App\Karyawan');
  }
}
