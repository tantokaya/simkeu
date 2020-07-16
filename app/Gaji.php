<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gaji extends Model
{
    public function karyawan()
    {
      return $this->belongsTo('App\Karyawan'); 
    }

    protected $fillable= [
        'nip', 'gaji_pokok', 'tj_istri', 'tj_anak', 'tj_upns', 'tj_struk', 
        'tj_fung', 'tj_beras', 'tj_pph', 'pot_pfk', 'pot_pph', 'pot_tabrum','bersih',
        'bulan','tahun'
      ];
}
