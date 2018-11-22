<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJenissuratTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenissurat', function (Blueprint $table) {
            $table->increments('id_js');
            $table->integer('id_pejabat');
            $table->string('jenis_surat');
            $table->text('isi_surat');
            $table->boolean('nama_pemohon_stat');
            $table->boolean('nrp_pemohon_stat');
            $table->boolean('ttl_stat');
            $table->boolean('alamat_stat');
            $table->boolean('ortu_stat');
            $table->boolean('pekerjaan_ortu_stat');
            $table->boolean('alamat_ortu_stat');
            $table->boolean('keperluan_skam_stat');
            $table->boolean('nama_lomba_stat');
            $table->boolean('hari_lomba_stat');
            $table->boolean('tgl_lomba_stat');
            $table->boolean('catatan_stat');
            $table->boolean('nama_beasiswa_stat');
            $table->boolean('tujuan_surat_stat');
            $table->boolean('instansi_tujuan_stat');
            $table->boolean('tgl_kp_stat');
            $table->boolean('judul_karya_stat');
            $table->boolean('alamat_instansi_stat');
            $table->boolean('nama_data_stat');
            $table->boolean('mata_kuliah_stat');
            $table->boolean('nama_tugas_stat');
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
        Schema::dropIfExists('jenissurat');
    }
}
