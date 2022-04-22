<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateCharacterWithLocation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('characters', function (Blueprint $table) {
            $table->integer('location_id')->unsigned()->nullable();
            $table->string('title')->nullable();
            $table->string('languages')->nullable();
            $table->longText('free')->nullable();
            $table->foreign('location_id')->references('id')->on('locations')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('characters', function (Blueprint $table) {
            $table->dropForeign('characters_location_id_foreign');
            $table->dropColumn('location_id');
            $table->dropColumn('title');
            $table->dropColumn('languages');
            $table->dropColumn('free');
        });
    }
}
