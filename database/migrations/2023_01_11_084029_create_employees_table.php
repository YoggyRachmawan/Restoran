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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('FK_Jabatan');
            $table->foreign('FK_Jabatan')->references('id')->on('positions')->cascadeOnUpdate()->restrictOnDelete();
            $table->string('fotoPegawai')->nullable();
            $table->string('namaPegawai');
            $table->string('tempatLahir');
            $table->date('tanggalLahir');
            $table->enum('jenisKelamin', ['Laki-laki', 'Perempuan']);
            $table->string('nomorTelepon');
            $table->string('email');
            $table->text('alamat');
            $table->string('password');
            $table->enum('status', ['on', 'off']);
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
        Schema::dropIfExists('employees');
    }
};
