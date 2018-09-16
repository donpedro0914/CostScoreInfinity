<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCostscoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('costscores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('measure_category');
            $table->string('measure_type');
            $table->string('property_type');
            $table->string('pre_main_heating_source_for_the_property');
            $table->string('post_main_heating_source_for_the_property');
            $table->string('name_of_uplift');
            $table->string('cost_score');
            $table->string('annual_saving');
            $table->string('l');
            $table->string('uplift');
            $table->string('average_popt_factor');
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
        Schema::dropIfExists('costscores');
    }
}
