<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('e_user');
            $table->datetime('e_postdate');
            $table->datetime('e_date');
            $table->text('e_text');
            $table->string('e_img');
            $table->string('e_release');
            $table->integer('e_watch');
            $table->integer('e_joinlist');
            $table->integer('e_comment');
            $table->string('e_hide');
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
        Schema::dropIfExists('events');
    }
}
