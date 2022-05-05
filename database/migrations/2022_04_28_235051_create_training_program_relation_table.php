<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingProgramRelationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('training_program_relation', function (Blueprint $table) {
            $table->id();
            $table->enum('weekday',['sunday','monday','tuesday','wednesday','thursday','friday','saturday']);
            $table->integer('program_id');
            $table->integer('training_id');
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
        Schema::dropIfExists('training_program_relation');
    }
}
