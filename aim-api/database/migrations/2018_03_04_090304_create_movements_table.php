<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movements', function (Blueprint $table) {
            $table->engine = 'Aria';
            $table->charset = 'utf8';
            $table->collation = 'utf8_romanian_ci';

            $table->increments('id');
            $table->string('dealer_id', 5);
            $table->foreign('dealer_id')->references('code')->on('dealers');
            $table->string('sdd_id', 10);
            $table->foreign('sdd_id')->references('sn')->on('sdds');
            $table->string('in_out', 3);
            $table->text('note');
            $table->date('movement_date');

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
        Schema::dropIfExists('movements');
    }
}
