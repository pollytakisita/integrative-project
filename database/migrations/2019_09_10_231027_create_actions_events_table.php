<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActionsEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actions_events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_ong');
            $table->string('title', 45);
            $table->string('description', 500);
            $table->string('address', 100);
            $table->string('district', 45);
            $table->string('city', 45);
            $table->string('uf', 2);
            $table->date('date', 45)->nullable();
            $table->string('image', 100);
            $table->foreign('id_ong')->references('id')->on('ongs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('action_events');
    }
}
