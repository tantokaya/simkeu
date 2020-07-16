<?php

use Illuminate\Database\Seeder;

class BulanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bulans')->insert([
            [
                'bulan_kd' => '01',
                'bulan_nm' => 'Januari',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'bulan_kd' => '02',
                'bulan_nm' => 'Februari',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'bulan_kd' => '03',
                'bulan_nm' => 'Maret',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'bulan_kd' => '04',
                'bulan_nm' => 'April',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'bulan_kd' => '05',
                'bulan_nm' => 'Mei',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'bulan_kd' => '06',
                'bulan_nm' => 'Juni',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'bulan_kd' => '07',
                'bulan_nm' => 'Juli',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'bulan_kd' => '08',
                'bulan_nm' => 'Agustus',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'bulan_kd' => '09',
                'bulan_nm' => 'September',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'bulan_kd' => '10',
                'bulan_nm' => 'Oktober',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'bulan_kd' => '11',
                'bulan_nm' => 'November',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'bulan_kd' => '12',
                'bulan_nm' => 'Desember',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
            
        ]);
    }
}
