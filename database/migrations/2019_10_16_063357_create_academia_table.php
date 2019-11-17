<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcademiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academia', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('aca_nombre', 100);
            $table->string('aca_status', 50);
            $table->integer('aca_num_alumnos');
            $table->timestamp('aca_fecha_corte');
            $table->decimal('aca_adeudo');

            $table->unsignedBigInteger('pla_id');
            $table->foreign('pla_id')->references('id')->on('plan');

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
        Schema::dropIfExists('academia');
    }
}
