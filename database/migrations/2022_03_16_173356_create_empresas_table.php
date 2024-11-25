<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('NIF')->nullable();
            $table->text('photo')->nullable();
            $table->string('TwilioAccountID')->nullable();
            $table->string('TwilioAccountSecret')->nullable();
            $table->string('TwilioAccountPhone')->nullable();
            $table->string('AlticeAccountID')->nullable();
            $table->string('AlticeAccountSecret')->nullable();
            $table->string('AlticeUrlApi')->nullable();            
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
        Schema::dropIfExists('empresas');
    }
}
