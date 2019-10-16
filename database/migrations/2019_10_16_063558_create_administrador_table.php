<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministradorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrador', function (Blueprint $table) {
            $table->bigIncrements('adm_id');
            $table->string('adm_nombre', 50);
            $table->string('adm_apellido_paterno', 50);
            $table->string('adm_apellido_materno', 50);
            $table->string('adm_metodo_de_pago', 100);
            $table->string('adm_password');
            $table->string('adm_correo_electronico')->unique();

            $table->unsignedBigInteger('aca_id');
            $table->foreign('aca_id')->references('aca_id')->on('academia');

            /* campo por default de 'users' de laravel */
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();

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
        Schema::dropIfExists('administrador');
    }
}
