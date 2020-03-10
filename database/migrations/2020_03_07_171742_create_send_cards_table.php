<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSendCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('send_cards', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('sender_id');
            $table->string('receiver_email');
            $table->string('card_url');
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('sender_id')->references('id')->on('users');
            $table->foreign('card_url')->references('comp_card_url')->on('complementary_cards');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('send_cards');
    }
}
