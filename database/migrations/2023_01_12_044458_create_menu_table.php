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
        Schema::create('menu', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('FK_Note');
            $table->foreign('FK_Note')->references('id')->on('note')->cascadeOnUpdate()->cascadeOnDelete();
            $table->unsignedBigInteger('FK_Makanan');
            $table->foreign('FK_Makanan')->references('id')->on('foods')->cascadeOnUpdate()->cascadeOnDelete();
            $table->unsignedBigInteger('FK_Minuman');
            $table->foreign('FK_Minuman')->references('id')->on('drinks')->cascadeOnUpdate()->cascadeOnDelete();
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
        Schema::dropIfExists('menu');
    }
};
