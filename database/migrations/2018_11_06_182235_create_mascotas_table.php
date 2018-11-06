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
            $table->timestamp('fecha_nacimiento')->default('0000-00-00 00-00-00');
            $table->timestamp('fecha_muerte')->default('0000-00-00 00-00-00');
            $table->timestamp('fecha_alta')->default('0000-00-00 00-00-00');
            $table->text('descripcion');

            $table->foreign('especie_id')
                              ->references('id')->on('especie')
                              ->onDelete('cascade')
                              ->onUpdate('cascade');
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
        Schema::dropIfExists('mascotas');
    }
}
