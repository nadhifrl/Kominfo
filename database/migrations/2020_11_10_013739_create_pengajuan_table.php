<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengajuanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('nama_dinas', 100);
            $table->text('alamat');
            $table->string('nama_penanggung', 100);
            $table->string('nip', 20);
            $table->string('pangkat', 100);
            $table->string('notelepon', 13);
            $table->string('nama_teknis', 100);
            $table->string('notelepon_teknis', 13);
            $table->string('nama_aplikasi', 100);
            $table->string('sub_domain', 100);
            $table->string('ip');
            $table->text('fungsi_app');
            $table->text('alasan');
            $table->string('file');
            $table->enum('status', ['Proses', 'Disetujui', 'Ditolak']);
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
        Schema::dropIfExists('pengajuan');
    }
}
