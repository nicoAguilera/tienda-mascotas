<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->enum('gender', ['F', 'M'])->default('F');
            $table->date('birthdate');
            $table->date('death_date');
            $table->date('discharge_date');
            $table->text('observation');
            // foreign key
            $table->unsignedInteger('species_id');
            $table->foreign('species_id')
                              ->references('id')->on('species')
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
        Schema::table('pets', function (Blueprint $table) {
            /*$table->dropForeign('pets_species_id_foreign');
            $table->dropColumn('species_id');*/
            Schema::drop('pets');
        });
    }
}
