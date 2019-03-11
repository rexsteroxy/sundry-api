<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocialSharesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_shares', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('listing_id');
            $table->text('whatsapp_share');
            $table->text('facebook_share');
            $table->text('twitter_share');
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
        Schema::dropIfExists('social_shares');
    }
}
