<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    public function golongan()
    {
      return $this->belongsTo('App\Golongan'); 
    }

    protected $fillable= [
      'nip', 'nip_lama', 'nama', 'jabatan', 'tgl_lahir', 'tmt_cpns', 
      'tmt_pns', 'gol_id', 'pendidikan', 'unit_id', 'status','aktif'
    ];

    protected $dates = ['tgl_lahir','tmt_cpns','tmt_pns'];
}
