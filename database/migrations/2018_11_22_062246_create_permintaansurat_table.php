<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermintaansuratTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permintaansurat', function (Blueprint $table) {
            $table->increments('id_ps');
            $table->integer('id_js');
            $table->string('no_surat');
            $table->string('tglbutuh_surat');
            $table->string('tglttd_surat');
            $table->string('nama_pemohon');
            $table->string('nrp_pemohon');
            $table->string('ttl');
            $table->string('alamat');
            $table->string('ortu');
            $table->string('pekerjaan_ortu');
            $table->string('alamat_ortu');
            $table->string('keperluan_skam');
            $table->string('nama_lomba');
            $table->string('hari_lomba');
            $table->string('tgl_lomba');
            $table->string('catatan');
            $table->string('nama_beasiswa');
            $table->string('tujuan_surat');
            $table->string('instansi_tujuan');
            $table->string('tgl_kp');
            $table->string('judul_karya');
            $table->string('alamat_instansi');
            $table->string('nama_data');
            $table->string('mata_kuliah');
            $table->string('nama_tugas');
            $table->string('status_surat');
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
