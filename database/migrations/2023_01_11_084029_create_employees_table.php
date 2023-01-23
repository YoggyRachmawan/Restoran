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
            $table->foreign('FK_Jabatan')->references('id')->on('postions')->cascadeOnUpdate()->restrictOnDelete();
            $table->string('fotoPegawai');
            $table->string('namaPegawai');
            $table->string('tempatLahir');
            $table->date('tanggalLahir');
            $table->enum('jenisKelamin', ['Laki-laki', 'Perempuan']);
            $table->bigInteger('nomorTelepon')->unique();
            $table->string('email')->unique();
            $table->text('alamat');
            $table->string('password');
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
