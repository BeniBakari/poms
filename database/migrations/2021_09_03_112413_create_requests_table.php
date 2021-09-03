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
            $table->bigInteger('requestId')->primary();
            $table->bigInteger('userId');
            $table->timestamp('startDate');
            // $table->timestamp('endDate');
            $table->bigInteger('source');
            $table->bigInteger('destination');
            $table->string('requestType',60);
            $table->string('requestDesc',200);
            $table->string('requestStatus',20);
            $table->string('approveStatus',20);
            $table->foreign('userId')->references('userId')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('source')->references('district_councilId')->on('district_councils')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('destination')->references('district_councilId')->on('district_councils')->onUpdate('cascade')->onDelete('cascade');
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
