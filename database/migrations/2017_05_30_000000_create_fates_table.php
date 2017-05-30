<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('key')->unique();
            $table->string('description')->nullable();
            $table->string('image')->nullable();
            $table->string('group_id');
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
        Schema::dropIfExists('fates');
    }
}
