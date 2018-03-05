<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSddsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sdds', function (Blueprint $table) {
            $table->engine = 'Aria';
            $table->charset = 'utf8';
            $table->collation = 'utf8_romanian_ci';

            $table->string('sn', 10)->primary();
            $table->date('in')->nullable();
            $table->date('out')->nullable();
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
        Schema::dropIfExists('sdds');
    }
}
