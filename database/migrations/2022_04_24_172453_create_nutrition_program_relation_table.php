<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNutritionProgramRelationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nutrition_program_relation', function (Blueprint $table) {
            $table->id();
            $table->enum('weekday',['sunday','monday','tuesday','wednesday','thursday','friday','saturday']);
            $table->integer('program_id');
            $table->integer('nutrition_id');
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
        Schema::dropIfExists('nutrition_program_relation');
    }
}
