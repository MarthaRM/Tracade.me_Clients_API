<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plan', function (Blueprint $table) {
            $table->bigIncrements('pla_id');
            $table->string('pla_nombre', 50);

            /* pla_tipo_plan: estandar o personalizado, para diferenciar entre
            clientes con plan estandar o planes perso */
            $table->string('pla_tipo_plan');

            $table->decimal('pla_precio');
            $table->string('pla_descripcion');
            $table->integer('pla_numero_alumnos');
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
        Schema::dropIfExists('plan');
    }
}
