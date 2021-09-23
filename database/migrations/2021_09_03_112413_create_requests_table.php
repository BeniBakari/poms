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
            $table->string('source');
            $table->string('destination');
            $table->string('requestType',60);
            $table->string('requestDesc',200);
            $table->string('requestStatus',20);
            $table->string('approveStatus',20);
            $table->foreign('userId')->references('id')->on('users')->onUpdate('cascade')->ondelete('null');
            // $table->foreign('source')->references('districtName')->on('district_councils')->onUpdate('cascade')->ondelete('null');
            // $table->foreign('destination')->references('districtName')->on('district_councils')->onUpdate('cascade')->ondelete('null');
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
