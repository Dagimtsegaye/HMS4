<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocPasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doc__pas', function (Blueprint $table) {
            $table->id();
            $table->string('Dia')->nullable();
            $table->string('His')->nullable();
            $table->string('Pre')->nullabel();
            $table->string('syp')->nullable();          
            $table->integer('Pa_id');
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
        Schema::dropIfExists('doc__pas');
    }
}
