<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('gurus', function (Blueprint $table) {
            $table->increments('id_guru');
            $table->string('nama_guru')->unique();
            $table->integer('id_mapel');
            $table->primary('id_guru');
        });
        Schema::create('siswas', function (Blueprint $table) {
            $table->increments('id_siswa');
            $table->string('nama_siswa');
            $table->integer('id_kelas');
            $table->primary('id_siswa');
        });
        Schema::create('kelass', function (Blueprint $table) {
            $table->increments('id_kelas');
            $table->string('nama_kelas')->unique();
            $table->integer('muatan_kelas');
            $table->primary('id_kelas');

        });
        Schema::create('mapels', function (Blueprint $table) {
            $table->increments('id_mapel');
            $table->string('nama_mapel')->unique();
            $table->primary('id_mapel');

        });
        Schema::create('kelas_belajars', function (Blueprint $table) {
            $table->increments('id_kelas_belajar');
            $table->integer('id_kelas');
            $table->integer('id_guru');
            $table->integer('id_siswa');
            $table->string('nama_kelas');
            $table->string('pengampu');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mapels');
        Schema::dropIfExists('gurus');
        Schema::dropIfExists('siswas');
        Schema::dropIfExists('kelass');
        Schema::dropIfExists('kelas_belajar');
    }
};
