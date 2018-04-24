<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_informations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('programmes');
            $table->string('last_name');
            $table->string('first_name');
            $table->string('email');
            $table->string('title');
            $table->date('DateOfBirth');
            $table->string('nationality');
            $table->string('question');
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
        Schema::dropIfExists('request_informations');
    }
}
