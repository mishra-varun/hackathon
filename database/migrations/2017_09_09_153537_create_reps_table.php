<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reps', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->text('title');
            $table->text('event_details');
            $table->text('objectives');
            $table->text('staff_involved');
            $table->text('participants');
            $table->text('external_resource_person');
            $table->text('description');
            $table->text('outcomes');
            $table->text('learning');
            $table->text('scope_for_improvement');
            $table->text('conclusion');
            $table->text('prepared_by');
            $table->text('designation');
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
        Schema::dropIfExists('reps');
    }
}
