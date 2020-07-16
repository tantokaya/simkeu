<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Bagus',
                'email' => 'bagus@gmail.com',
                'password' => Hash::make('bagus1234'),
                'group_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Karyawan 1',
                'email' => 'kary_1@gmail.com',
                'password' => Hash::make('kary1234'),
                'group_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
            
        ]);
    }
}
