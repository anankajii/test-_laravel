<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pengalaman_kerja', function (Blueprint $table) {

            $table->id();
            $table->string('jabatan');
            $table->year('tahun_masuk');
            $table->year('tahun_keluar');
            $table->string('sistem');

            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('pengalaman_kerja');
    }
};
