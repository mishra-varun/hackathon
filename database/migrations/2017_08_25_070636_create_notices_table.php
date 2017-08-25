<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('created_by');
            $table->text('title');
            $table->text('sub_title');
            $table->text('ref_num');
            $table->text('date');
            $table->text('to');
            $table->text('subject');
            $table->text('body');
            $table->text('creator_name');
            $table->text('designation');
            $table->text('copy_to');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notices');
    }
}
