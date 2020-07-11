<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeaturesTable extends Migration
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
        Schema::create('features', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('feature_name');
            $table->string('feature_image');
            $table->text('feature_about');
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

    public function doen()
    {
        Schema::drop('features');
    }
}
