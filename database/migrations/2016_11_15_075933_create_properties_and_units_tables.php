<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesAndUnitsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('number_of_units')->nullable();
            $table->integer('owner_id')->nullable();
            $table->string('location');
            $table->string('name');
            $table->string('type')->nullable();
            $table->string('photos')->default('Home.png');
            $table->string('account');
            $table->string('country');
            $table->string('city');
            $table->string('province');
            $table->string('zip');
            $table->timestamps();
        });



        Schema::create('units', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('tenant_id')->nullable();
            $table->integer('tenant_id')->references('id')->on('tenants')->onDelete('cascade')->onUpdate('cascade');
            $table->string('size')->nullable();
            $table->integer('bedrooms')->nullable();
            $table->integer('unit_number')->nullable();
            $table->integer('bathrooms')->nullable();
            $table->string('status')->nullable();
            $table->string('features')->nullable();
            $table->float('deposit')->nullable();
            $table->float('rental_amount')->nullable();
            $table->float('market_rent')->nullable();
            $table->string('description')->nullable();
            $table->integer('owner_id')->nullable();
            $table->foreign('owner_id')->references('id')->on('owners')->onDelete('cascade');
            $table->integer('property_id')->unsigned()->default(0);
            $table->foreign('property_id')->references('id')->on('properties')->onDelete('cascade');
            $table->string('name')->nullable();
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
        Schema::dropIfExists('properties');
        Schema::dropIfExists('units');
    }
}
