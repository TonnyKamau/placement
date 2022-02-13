<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrimariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('primaries', function (Blueprint $table) {
            $table->id();
            $table->string('primary_code')->unique();
            $table->string('primary_name');
            $table->string('county');
            $table->string('subcounty');
            $table->string('type');
            $table->integer('capacity');
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
        Schema::dropIfExists('primaries');
    }
}
