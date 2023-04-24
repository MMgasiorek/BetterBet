<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('api_id');
            $table->dateTime('start_time');
            $table->string('name_home');
            $table->string('name_away');
            $table->string('league');
            $table->float('over_price');
            $table->float('over_point');
            $table->float('under_price');
            $table->float('under_point');
            $table->integer('score_home')->nullable();
            $table->integer('score_away')->nullable();
            $table->boolean('ended')->default(false);
            $table->rememberToken();
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
        Schema::dropIfExists('games');
    }
}
