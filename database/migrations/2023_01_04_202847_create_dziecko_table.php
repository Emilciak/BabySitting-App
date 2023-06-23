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
        Schema::create('dziecko', function (Blueprint $table) {
            $table->id();
            $table->string('imie',25);
            $table->integer('idRodzica')->unsigned();
            $table->foreign('idRodzica')->references('id')->on('rodzic')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dziecko');
    }
};
