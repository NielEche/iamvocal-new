<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubeventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subevents', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('date')->nullable();
            $table->string('venue')->nullable();
            $table->string('time')->nullable();
            $table->string('event_id')->nullable();
            $table->string('flickr')->nullable();
            $table->string('bio')->nullable();
            $table->string('register')->nullable();
            $table->string('embed')->nullable();
            $table->string('file_path')->nullable();
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
        Schema::dropIfExists('subevents');
    }
}
