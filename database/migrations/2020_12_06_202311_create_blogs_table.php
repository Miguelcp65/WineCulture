<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->date('data');
            $table->biginteger('id_user')->unsigned();
            $table->biginteger('id_categoria')->unsigned();
            $table->longText('preview');
            $table->longText('descricao');
            $table->string('img')->nullable();
            $table->timestamps();
            $table->foreign('id_categoria')->references('id')->on('categories');
            $table->foreign('id_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
