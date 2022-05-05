<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Azienda', 64);
            $table->string('StazionePartenza', 64);
            $table->string('StazioneArrivo', 64);
            $table->time('OrarioPartenza');
            $table->time('OrarioArrivo');
            $table->string('CodiceTreno', 6);
            $table->tinyInteger('NumeroCarrozze');
            $table->boolean('InOrario');
            $table->boolean('Cancellato');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
}
