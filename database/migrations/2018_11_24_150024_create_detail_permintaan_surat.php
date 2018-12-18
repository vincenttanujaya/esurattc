<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailPermintaanSurat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailpermintaansurat', function (Blueprint $table) {
            $table->increments('id_dps');
            $table->integer('id_atribut')->unsigned();
            $table->foreign('id_atribut')->references('id_atribut')->on('atributsurat');
            $table->integer('id_permintaan_surat')->unsigned();
            $table->foreign('id_permintaan_surat')->references('id_permintaan_surat')->on('permintaansurat');
            $table->string('rincian');
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
        Schema::dropIfExists('detailpermintaansurat');
    }
}
