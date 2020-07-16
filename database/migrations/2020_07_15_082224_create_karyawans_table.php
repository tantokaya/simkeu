<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryawansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nip',20)->nullable();
            $table->string('nip_lama',20);
            $table->string('nama',250);
            $table->string('jabatan',200)->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->date('tmt_cpns')->nullable();
            $table->date('tmt_pns')->nullable();
            $table->integer('gol_id')->nullable();
            $table->string('pendidikan',200)->nullable();
            $table->integer('unit_id')->nullable()->unsigned();
            $table->integer('status')->nullable()->unsigned();
            $table->integer('aktif')->nullable()->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('karyawans');
    }
}
