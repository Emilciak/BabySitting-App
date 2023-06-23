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
        Schema::create('rozliczenia', function (Blueprint $table) {
            $table->id();
            $table->integer('idZlecenia')->unsigned();
            $table->foreign('idZlecenia')->references('id')->on('zlecenia')->onDelete('cascade');
            $table->integer('idOpiekuna')->unsigned();
            $table->foreign('idOpiekuna')->references('id')->on('opiekun')->onDelete('cascade');
            $table->integer('rozliczenieFinansowe');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rozliczenia');
    }
};
