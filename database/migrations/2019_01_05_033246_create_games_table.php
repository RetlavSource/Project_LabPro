<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->unsignedInteger('value_day');
            $table->unsignedInteger('quantity');
            $table->string('youtube_link')->nullable();
            $table->string('store_link')->nullable();
            $table->string('game_link')->nullable();
            $table->string('icon_path');
            $table->string('image_path');
            $table->unsignedInteger('console_id');
            $table->timestamps();

            $table->foreign('console_id')->references('id')->on('consoles');
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
