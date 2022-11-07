<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVinhosimgTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vinhosimgs', function (Blueprint $table) {
            $table->id();
            $table->biginteger('id_vinho')->unsigned();
            $table->string('img');
            $table->foreign('id_vinho')
            ->references('id')->on('vinhos');
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
        Schema::dropIfExists('vinhos');
    }
}
