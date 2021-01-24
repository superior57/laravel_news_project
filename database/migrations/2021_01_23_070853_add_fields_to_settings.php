<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToSettings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('settings', function (Blueprint $table) {
            //
            $table->string('news_img')->nullable();
            $table->string('news_video')->nullable();
            $table->string('artist_img')->nullable();
            $table->string('artist_video')->nullable();
            $table->string('project_img')->nullable();
            $table->string('project_video')->nullable();
            $table->string('shop_img')->nullable();
            $table->string('shop_video')->nullable();
            $table->string('contact_us_img')->nullable();
            $table->string('contact_us_video')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('settings', function (Blueprint $table) {
            //
        });
    }
}
