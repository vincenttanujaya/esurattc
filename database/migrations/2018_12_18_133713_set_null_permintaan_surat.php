<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SetNullPermintaanSurat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('permintaansurat', function (Blueprint $table) {
            $table->string('no_surat')->nullable()->change();
            $table->string('tgl_ttd_surat')->nullable()->change();
            $table->string('status_surat')->default('BELUM DIPROSES')->change();
            $table->text('catatan')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
