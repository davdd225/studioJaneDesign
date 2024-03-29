<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services_janes', function (Blueprint $table) {
            $table->id('id_service_jane');
            $table->string('nom_service_jane');
            $table->string('images_service_jane');
            $table->timestamps();
            //$table->longText('descritpion_service_jane');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services_janes');
    }
};  
