<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCityCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('city_company', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('city_id');
            $table->unsignedBigInteger('company_id');

            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('company_id')->references('id')->on('companies');

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
        Schema::dropIfExists('city_company');
    }
}
