<?php

use Illuminate\Database\Seeder;

class KaryawanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('karyawans')->insert([
            [
                'nip'           => '199802993993333', 
                'nip_lama'      => '68999920033', 
                'nama'          => 'Bagus',
                'jabatan'       => 'Kasubag',
                'tgl_lahir'     => '1998-01-15',
                'tmt_cpns'      => '2015-03-01',
                'tmt_pns'       => '2016-04-01',
                'gol_id'        => '1',
                'pendidikan'    => '4',
                'unit_id'       => '1',
                'status'        => '1',
                'aktif'         => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'nip'           => '199902993993333',
                'nip_lama'      => '68999920033', 
                'nama'          => 'Cepot',
                'jabatan'       => 'Staf',
                'tgl_lahir'     => '1999-04-10',
                'tmt_cpns'      => '2015-03-01',
                'tmt_pns'       => '2016-04-01',
                'gol_id'        => '1',
                'pendidikan'    => '4',
                'unit_id'       => '1',
                'status'        => '1',
                'aktif'         => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'nip'           => '200102993993333', 
                'nama'          => 'Hana Hanifa',
                'nip_lama'      => '68999920033',
                'jabatan'       => 'Kasie',
                'tgl_lahir'     => '2001-05-08',
                'tmt_cpns'      => '2015-03-01',
                'tmt_pns'       => '2016-04-01',
                'gol_id'        => '1',
                'pendidikan'    => '4',
                'unit_id'       => '1',
                'status'        => '1',
                'aktif'         => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
            
            
        ]);
    }
}
