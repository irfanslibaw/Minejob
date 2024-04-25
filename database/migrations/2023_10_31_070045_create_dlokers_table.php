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
        Schema::create('dlokers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('datapt_id');
            $table->string('bagian_pekerjaan');
            $table->date('tanggal_akhir');
            $table->text('deskripsi_pekerjaan');
            $table->text('persyaratan');
            $table->string('tingkat_pekerjaan');
            $table->string('minimal_kelulusan');
            $table->string('pengalaman');
            $table->string('jenis_pekerjaan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dlokers');
    }
};
