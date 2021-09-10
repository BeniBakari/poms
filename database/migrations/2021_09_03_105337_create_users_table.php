<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('firstName',60);
            $table->string('lastName',60);
            $table->string('email',60)->unique();
            $table->string('gender',6);
            $table->string('phone',10)->unique();
            $table->string('status');
            $table->string('password',60);
            $table->integer('roleId')->unsigned();
            $table->integer('district_councilId')->unsigned();
            $table->integer('divisionId')->unsigned();
            $table->foreign('divisionId')->references('divisionId')->on('divisions')->onUpdate('cascade')->ondelete('null');
            $table->foreign('roleId')->references('roleId')->on('roles')->onUpdate('cascade')->ondelete('null');
            $table->foreign('district_councilId')->references('district_councilId')->on('district_councils')->onUpdate('cascade')->ondelete('null');
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
