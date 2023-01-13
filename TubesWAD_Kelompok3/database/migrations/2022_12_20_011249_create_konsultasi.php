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
        Schema::create('konsultasi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('nama_lengkap');
            $table->integer('umur');
            $table->string('jenis_kelamin');
            $table->string('deskripsi_konsul');
            $table->string('bidang_dokter');
            $table->string('dokter');
            $table->string('tanggal');
            $table->string('jam');
            $table->string('status');
            $table->string('alasan');
            $table->timestamps();
        });

        Schema::table('konsultasi', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('konsultasi');
    }
};
