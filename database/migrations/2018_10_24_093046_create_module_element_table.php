<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModuleElementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('module_elements', function (Blueprint $table) {
            $table->increments('idEl');
            $table->string('nomEl');
            $table->integer('MH')->default(0);
            $table->unsignedInteger('module_id');
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
        Schema::dropIfExists('module_elements');
    }
}
