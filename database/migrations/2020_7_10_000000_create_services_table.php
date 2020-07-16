<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     *
     *Create Table
     *
     *@return void
     *
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('service_name');
            $table->text('service_excerpt');
            $table->string('service_icon')->default('fa fa-concierge-bell');
            $table->timestamps();
        });
    }

    /**
     *
     *Drop Table
     *
     *@return void
     *
     */
    public function down()
    {
        Schema::drop('services');
    }
}
