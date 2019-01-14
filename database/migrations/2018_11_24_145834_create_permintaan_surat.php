<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermintaanSurat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permintaansurat', function (Blueprint $table) {
            $table->increments('id_permintaan_surat');
            $table->integer('id_jenis_surat')->unsigned();
            $table->foreign('id_jenis_surat')->references('id_jenis_surat')->on('jenissurat');
            $table->string('no_surat')->nullable();
            $table->date('tgl_butuh_surat');
            $table->string('tgl_ttd_surat')->nullable();
            $table->string('nama_pemohon');
            $table->string('nrp_pemohon');
            $table->string('status_surat')->default('BELUM DIPROSES');
            $table->text('catatan')->nullable();
            $table->text('suratselesai')->nullable();
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
        Schema::dropIfExists('permintaansurat');
    }
}
