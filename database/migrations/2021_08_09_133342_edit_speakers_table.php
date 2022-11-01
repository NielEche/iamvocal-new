<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditSpeakersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('speakers', function (Blueprint $table) {
            $table->string('name')->nullable()->change();
            $table->string('date')->nullable()->change();
            $table->string('venue')->nullable()->change();
            $table->string('time')->nullable()->change();
            $table->string('event_id')->nullable()->change();
            $table->string('flickr', 2000)->nullable()->change();
            $table->string('bio', 2000)->nullable()->change();
            $table->string('register')->nullable()->change();
            $table->string('embed')->nullable()->change();
            $table->string('file_path')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
