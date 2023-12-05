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
        Schema::create('table_furniture', function (Blueprint $table) {
            $table->id('id_funiture');
            $table->string('furniture_name');
            $table->string('furniture_type');
            $table->string('furniture_materiau');
            $table->integer('furniture_dimension');
            $table->string('furniture_couleur');
            $table->string('furniture_description');
            $table->string('furniture_images');
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
        Schema::dropIfExists('table_furniture');
    }
};
