<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFollowpairTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('followpair', function (Blueprint $table) {
            $table->bigIncrements('id') -> primary();
              $table->foreign('listofuser_id_for_the_followed') -> references('id') -> on ('listofusers');
              $table->foreign('users_id_of_the_one_following') -> references('id') -> on ('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('followpair');
    }
}
