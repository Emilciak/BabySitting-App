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
        Schema::create('zlecenia', function (Blueprint $table) {
            $table->id();
            $table->integer('idDziecka')->unsigned();
            $table->foreign('idDziecka')->references('id')->on('dziecko')->onDelete('cascade');
            $table->integer('idOpiekuna')->unsigned();
            $table->foreign('idOpiekuna')->references('id')->on('opiekun')->onDelete('cascade');
            $table->integer('czasWminutach');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zlecenia');
    }
};
