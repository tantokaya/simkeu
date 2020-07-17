<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(PendidikanTableSeeder::class);
        $this->call(GolonganTableSeeder::class);
        $this->call(UnitKerjaTableSeeder::class);
        $this->call(StatusTableSeeder::class);
        $this->call(BulanTableSeeder::class);
        $this->call(TahunTableSeeder::class);
        $this->call(KaryawanTableSeeder::class);
    }
}
