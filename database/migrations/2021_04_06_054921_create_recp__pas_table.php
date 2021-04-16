<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecpPasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recp__pas', function (Blueprint $table) {
            $table->id();
            $table->string('C_number');
            $table->string('fname');
            $table->string('mname');
            $table->date('dob')->nullable();
            $table->integer('sex');
            $table->string('Phone');
            $table->string('Address')->nullable(); 
            $table->string('worda')->nullable();
            $table->string('kebel')->nullable();
            $table->integer('status')->default('1');
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
        Schema::dropIfExists('recp__pas');
    }
}
