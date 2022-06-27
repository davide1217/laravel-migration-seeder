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

            $table->string('Azienda', 50);
            $table->string('Stazione_di_partenza', 200);
            $table->string('Stazione_di_arrivo', 200);
            $table->time('Orario_di_partenza');
            $table->time('Orario_di_arrivo');
            $table->smallInteger('Codice_Treno')->unsigned();
            $table->tinyInteger('Numero_Carrozze')->unsigned();
            $table->string('In_orario', 30);
            $table->boolean('Cancellato')->default(0);

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
        Schema::dropIfExists('trains');
    }
}
