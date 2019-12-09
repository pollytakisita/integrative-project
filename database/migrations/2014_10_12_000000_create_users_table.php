<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 100);
            $table->string('email', 45)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 255);
            $table->string('occupation', 50 )->nullable();
            $table->string('biography', 1000 )->nullable();
            $table->string('website1', 100)->nullable();
            $table->string('areas', 255)->nullable();
            $table->string('district', 45)->nullable();
            $table->string('city', 45)->nullable();
            $table->string('uf', 2)->nullable();;
            $table->string('avatar', 100)->nullable();
            $table->rememberToken();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
