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
            Schema::enableForeignKeyConstraints();
            $table->increments('eid');
            $table->string('ename');
            $table->text('descrip');
            $table->string('city');
            $table->dateTime('start_at');
            $table->dateTime('end_at');
            $table->integer('pid')->unsigned();
            $table->foreign('pid')->references('pid')->on('places')->onDelete('cascade');

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
        $table->dropForeign('events_pid_foreign');
    }
}
