<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGajisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gajis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nip',20)->nullable();
            $table->double('gaji_pokok')->nullable()->unsigned()->default(0);
            $table->double('tj_istri')->nullable()->unsigned()->default(0);
            $table->double('tj_anak')->nullable()->unsigned()->default(0);
            $table->double('tj_upns')->nullable()->unsigned()->default(0);
            $table->double('tj_struk')->nullable()->unsigned()->default(0);
            $table->double('tj_fung')->nullable()->unsigned()->default(0);
            $table->double('tj_beras')->nullable()->unsigned()->default(0);
            $table->double('tj_pph')->nullable()->unsigned()->default(0);
            $table->double('pot_pfk')->nullable()->unsigned()->default(0);
            $table->double('pot_pph')->nullable()->unsigned()->default(0);
            $table->double('pot_tabrum')->nullable()->unsigned()->default(0);
            $table->double('bersih')->nullable()->unsigned()->default(0); 
            $table->string('bulan',5)->nullable(); 
            $table->string('tahun',6)->nullable(); 
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
        Schema::dropIfExists('gajis');
    }
}
