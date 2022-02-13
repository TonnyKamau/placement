<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSecondariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('secondaries', function (Blueprint $table) {
            $table->id();
            $table->string('secondary_code')->unique();
            $table->string('secondary_name');
            $table->string('level');
            $table->string('county');
            $table->string('subcounty');
            $table->string('type');
            $table->integer('capacity');
            $table->integer('min_marks');
            $table->string('Box');
            $table->string('email');
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
        Schema::dropIfExists('secondaries');
    }
}
