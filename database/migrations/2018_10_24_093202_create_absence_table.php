<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbsenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absences', function (Blueprint $table) {
            $table->increments('idA');
            $table->float('heures');
            $table->date('date_absence');
            $table->unsignedInteger('etudiant_id');
            $table->unsignedInteger('module_id');
            $table->foreign('etudiant_id')->references('idE')->on('etudiants')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('module_id')->references('idM')->on('modules')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('absences');
    }
}
