<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMascotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mascotas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->enum('sexo', ['F', 'M'])->default('F');
            $table->date('fecha_nacimiento');
            $table->date('fecha_muerte');
            $table->date('fecha_alta');
            $table->text('descripcion');

            /* foreign key
            $table->integer('especie_id')->unsigned();
            $table->foreign('especie_id')
                              ->references('id')->on('especie')
                              ->onDelete('cascade')
                              ->onUpdate('cascade');
            $table->timestamps();*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mascotas');
    }
}
