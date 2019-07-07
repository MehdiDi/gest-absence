<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enseignants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('name');
            $table->string('prenom')->nullable();
            $table->date('dateNaissance')->nullable();;
            $table->string('adresse')->nullable();;
            $table->unsignedInteger('dept_id');
            $table->unsignedInteger('chef_dept_id');
            $table->foreign('dept_id')->references('idDept')->on('departements')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('chef_dept_id')->references('idDept')->on('departements')->onDelete('cascade')->onUpdate('cascade');
            
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
        Schema::dropIfExists('users');
    }
}
