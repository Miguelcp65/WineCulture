<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVinhosClassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vinhosclass', function (Blueprint $table) {
            $table->id();
            $table->biginteger('id_vinho')->unsigned();
            $table->integer('nr_class');
            $table->integer('classificacao');
            $table->integer('total_class');
            $table->timestamps();
            $table->foreign('id_vinho')
            ->references('id')->on('vinhos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vinhosclass');
    }
}
