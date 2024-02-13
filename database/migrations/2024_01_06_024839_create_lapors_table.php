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
        Schema::create('lapors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jenis_Lapor_id')->constrained();
            $table->string('name');
            $table->boolean('jenisKelamin')->default(false);//0 for men 1 female
            $table->text('rumah');
            $table->string('pekerjaan');
            $table->text('kantor');
            $table->string('email');
            $table->string('ktp')->length(17);;
            $table->string('phone_number')->length(12);;
            $table->string('subjek');
            $table->text('isian');
            $table->date('tanggal_kejadian');
            $table->string('lokasi');
            $table->string('tujuan_pengaduan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lapors');
    }
};
