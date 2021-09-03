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
            $table->bigInteger('userId')->primary();
            $table->string('firstName',60);
            $table->string('lastName',60);
            $table->string('email',60)->unique();
            $table->string('password',60);
            $table->bigInteger('roleId');
            $table->bigInteger('district_councilId');
            $table->bigInteger('divisionId');
             $table->foreign('divisionId')->references('divisionId')->on('divisions')->onUpdate('cascade')->onDelete('cascade');
             $table->foreign('roleId')->references('roleId')->on('roles')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('district_councilId')->references('district_councilId')->on('district_councils')->onUpdate('cascade')->onDelete('cascade');
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
