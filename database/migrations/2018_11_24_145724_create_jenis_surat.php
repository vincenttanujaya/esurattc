<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJenisSurat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenissurat', function (Blueprint $table) {
            $table->increments('id_jenis_surat');
            $table->integer('id_pejabat')->unsigned();
            $table->foreign('id_pejabat')->references('id_pejabat')->on('pejabat');
            $table->string('jenis_surat');
            $table->text('isi_surat');
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
