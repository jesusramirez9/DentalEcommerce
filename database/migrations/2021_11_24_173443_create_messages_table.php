<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('from_user_id'); // id quien envia el mensaje
            $table->foreign('from_user_id')->references('id')->on('users');

            $table->unsignedBigInteger('to_user_id'); // id a quien se envia el mensaje
            $table->foreign('to_user_id')->references('id')->on('users');

            $table->string('subject');

            $table->text('body');

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
        Schema::dropIfExists('messages');
    }
}
