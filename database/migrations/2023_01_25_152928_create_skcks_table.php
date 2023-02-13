<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skcks', function (Blueprint $table) {
            $table->id();
            $table->string('keperluan');
            $table->string('identitas');
            $table->string('nopassport');
            $table->string('tingkatkewenangan');
            $table->string('nomoridentitas');
            $table->string('nomorkitas');
            $table->string('fullname');
            $table->string('notelp');
            $table->string('tanggallahir');
            $table->string('jeniskelamin');
            $table->string('agama');
            $table->string('pekerjaan');
            $table->string('tempatlahir');
            $table->string('statusperkawinan');
            $table->string('warganegara');
            $table->string('beratbadan');
            $table->string('tinggi');
            $table->string('bentukwajah');
            $table->string('rambut');
            $table->string('kulit');
            $table->string('tandaistimewa');
            $table->string('alamatktp');
            $table->string('rt');
            $table->string('rw');
            $table->string('provinsi');
            $table->string('kecamatan');
            $table->string('kabupaten');
            $table->string('desa');
            $table->string('domisili');
            $table->string('alamatsekarang');
            $table->string('rtsekarang');
            $table->string('rwsekarang');
            $table->string('provinsisekarang');
            $table->string('kecamatansekarang');
            $table->string('kabupatensekarang');
            $table->string('desasekarang');
            $table->string('status');
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
        Schema::dropIfExists('skcks');
    }
};
