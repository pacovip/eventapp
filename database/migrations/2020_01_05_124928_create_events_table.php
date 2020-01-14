<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void 
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('type_id')->unsigned()->index();
            $table->bigInteger('city_id')->unsigned()->index();
            $table->bigInteger('town_id')->unsigned()->index();
            $table->bigInteger('district_id')->unsigned()->index();
            $table->string('name');
            $table->text('description')->nullable();
            $table->text('image')->nullable();
            $table->text('video')->nullable();
            $table->string('website_advertiser', 191)->nullable();
            $table->string('email_advertiser', 191)->nullable();
            $table->text('contact_advertiser')->nullable();
            $table->datetime('date');
            $table->timestamps();
            // foreignkey
            $table->foreign('type_id')->references('id')->on('events_types')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('city_id')->references('id')->on('cities')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('town_id')->references('id')->on('towns')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('district_id')->references('id')->on('districts')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
