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
        Schema::create('opiekun', function (Blueprint $table) {
            $table->id();
            $table->string('imie',25);
            $table->string('nazwisko',25);
            $table->integer('wiek');
            $table->integer('ileLatWzawodzie');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('opiekun');
    }
};
