<?php

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
            $table->increments('id');
            $table->integer('sid')
                  ->nullable()
                  ->unsigned();
            $table->string('name');
            $table->string('email')
                  ->unique();
            $table->string('password', 60);
            $table->string('activation_code');
            $table->boolean('verified')
                  ->default(false);
            $table->boolean('blocked')
                  ->default(false);
            $table->tinyInteger('resent')
                  ->unsigned()
                  ->default(0);
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
        Schema::drop('users');
    }
}
