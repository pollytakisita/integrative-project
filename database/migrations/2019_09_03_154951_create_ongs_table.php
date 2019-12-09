<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOngsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ongs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 100);
            $table->string('segment', 45);
            $table->string('description', 500);
            $table->string('address', 100);
            $table->string('district', 45);
            $table->string('city', 45);
            $table->string('uf', 2)->nullable();
            $table->string('phone1', 13)->nullable();
            $table->string('phone2', 14)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('website1', 100)->nullable();
            $table->string('website2', 100)->nullable();
            $table->string('website3', 100)->nullable();
            $table->string('website4', 100)->nullable();
            $table->string('avatar', 100)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ongs');
    }
}
