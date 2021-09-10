<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistrictCouncilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('district_councils', function (Blueprint $table) {
            $table->increments('district_councilId');
            $table->string('districtName',60);
            $table->integer('regionId')->unsigned();
            $table->foreign('regionId')->references('regionId')->on('regions')->onUpdate('cascade')->ondelete('null');
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
        Schema::dropIfExists('district_councils');
    }
}
