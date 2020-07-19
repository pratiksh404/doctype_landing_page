<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLandingsTable extends Migration
{
    /**
     *
     *Run the migrations
     *
     *@return void
     *
     */
    public function up()
    {
        Schema::create('landings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('landing_name')->nullable();
            $table->string('landing_excerpt')->nullable();
            $table->text('landing_about')->nullable();
            $table->string('landing_logo')->nullable();
            $table->string('landing_favicon')->nullable();
            $table->string('landing_facebook')->nullable();
            $table->string('landing_instagram')->nullable();
            $table->string('landing_messenger')->nullable();
            $table->string('landing_github')->nullable();
            $table->string('landing_linkedin')->nullable();
            $table->string('landing_email')->nullable();
            $table->string('landing_patreon')->nullable();
            $table->text('landing_google_map')->nullable();
            $table->string('landing_location')->nullable();
            $table->string('landing_contact')->nullable();
            $table->string('landing_web_app')->nullable();
            $table->string('landing_android_app')->nullable();
            $table->string('landing_ios_app')->nullable();
            $table->string('landing_trial')->nullable();
            $table->string('landing_app_img')->nullable();
            $table->string('landing_app_video')->nullable();
            $table->timestamps();
        });
    }

    /**
     *
     *Drop the Table
     *
     *@return void
     *
     */

    public function down()
    {
        Schema::drop('landings');
    }
}
