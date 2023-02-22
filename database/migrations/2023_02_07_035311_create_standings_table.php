<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStandingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('standings', function (Blueprint $table) {
            $table->id();
            $table->string('country_code');
            $table->integer('MP')->default(0);
            $table->integer('W')->default(0);
            $table->integer('D')->default(0);
            $table->integer('L')->default(0);
            $table->integer('Pts')->default(0);
            $table->integer('GF')->default(0);
            $table->integer('GA')->default(0);
            $table->integer('GD')->default(0);
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
        Schema::dropIfExists('standings');
    }
}
