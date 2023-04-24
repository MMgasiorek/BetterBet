<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->boolean('confirm')->default(false);
            $table->float('max_bet');
            $table->float('sum_odds')->default(1);
            $table->boolean('result')->nullable();
            $table->boolean('ended')->default(false);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('game_ticket', function (Blueprint $table) {
            $table->unsignedBigInteger('game_id');
            $table->unsignedBigInteger('ticket_id');
            $table->float('your_odd');
            $table->integer('your_type');
            $table->boolean('result')->nullable();
            $table->foreign('game_id')->references('id')->on('games')->onDelete('cascade');
            $table->foreign('ticket_id')->references('id')->on('tickets')->onDelete('cascade');
            $table->primary(['game_id', 'ticket_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('game_ticket');
        Schema::dropIfExists('tickets');
    }
}
