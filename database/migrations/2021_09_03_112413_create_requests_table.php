<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->increments('requestId');
            $table->bigInteger('userId')->unsigned();
            $table->string('startDate');
            $table->string('endDate');
            $table->integer('source')->unsigned();
            $table->integer('destination')->unsigned();
            $table->string('requestType',60);
            $table->string('requestDesc',200);
            $table->string('requestStatus',20);
            $table->string('approveStatus',20);
            $table->foreign('userId')->references('id')->on('users')->onUpdate('cascade')->ondelete('null');
            $table->foreign('source')->references('district_councilId')->on('district_councils')->onUpdate('cascade')->ondelete('null');
            $table->foreign('destination')->references('district_councilId')->on('district_councils')->onUpdate('cascade')->ondelete('null');
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
        Schema::dropIfExists('requests');
    }
}
