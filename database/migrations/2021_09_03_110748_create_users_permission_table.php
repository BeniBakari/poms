<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersPermissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_permission', function (Blueprint $table) {
            $table->bigInteger('userId');
            $table->bigInteger('permissionId');
            $table->primary('userId','permissionId');
            $table->foreign('userId')->references('userId')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('permissionId')->references('permissionId')->on('permission')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('users_permission');
    }
}
