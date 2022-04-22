<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampaignSettings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaign_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('campaign_id')->unsigned()->notNull();
            $table->boolean('characters')->default(true);
            $table->boolean('events')->default(true);
            $table->boolean('families')->default(true);
            $table->boolean('items')->default(true);
            $table->boolean('journals')->default(true);
            $table->boolean('locations')->default(true);
            $table->boolean('notes')->default(true);
            $table->boolean('organisations')->default(true);
            $table->timestamps();

            // Foreign
            $table->foreign('campaign_id')->references('id')->on('campaigns')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campaign_settings');
    }
}
