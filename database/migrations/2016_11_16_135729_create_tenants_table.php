<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTenantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tenants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
             $table->string('employment')->nullable();
             $table->string('income')->nullable();
             $table->string('lease')->nullable();
             $table->string('application')->nullable();
             $table->string('references')->nullable();
             $table->string('company_name')->nullable();
             $table->string('email')->nullable();
             $table->string('phone')->nullable();
             $table->string('next_of_kin')->nullable();
             $table->string('id_number')->nullable();
             $table->string('dob')->nullable();
             $table->string('rental_history')->nullable();
             $table->string('property_id')->nullable();
            $table->string('unit_id')->nullable();
            $table->foreign('unit_id')->references('id')->on('units')->onDelete('cascade')->onUpdate('cascade');;
            $table->foreign('property_id')->references('id')->on('properties')->onDelete('cascade');
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
        //
        Schema::dropIfExists('tenants');
    }
}
