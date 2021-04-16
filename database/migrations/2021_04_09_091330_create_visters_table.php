<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visters', function (Blueprint $table) {
            $table->id();
            $table->string('Lab_test');
            $table->string('To');
            $table->string('From');
            $table->integer('Pa_id');
            $table->string('Lab_result')->nullable();
       
            $table->integer('status')->default('0');
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
        Schema::dropIfExists('visters');
    }
}
