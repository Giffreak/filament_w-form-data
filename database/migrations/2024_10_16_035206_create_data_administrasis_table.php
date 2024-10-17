<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('data_administrasi', function (Blueprint $table) {
            $table->id();
            $table->string('kta_ink');
            $table->integer('no_kadin');
            $table->integer('nama_bu');
            $table->string('alamat');
            $table->integer('telepon_kantor');
            $table->string('email');
            $table->string('website');
            $table->string('npwp');
            $table->string('catatan');
            $table->string('s_penanaman_modal');
            $table->string('nib');
            $table->string('tanggal_nib');
            $table->integer('sk_menkeu');
            $table->string('izin_kjpp');
            $table->date('tanggal_skmen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_administrasis');
    }
};
