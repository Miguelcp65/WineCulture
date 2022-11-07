<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Receitastable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receitas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('foto');
            $table->biginteger('id_categoria')->unsigned();
            $table->biginteger('id_user')->unsigned();
            $table->string('descricao');
            $table->text('ingre')->nullable();
            $table->text('preparo')->nullable();
            $table->timestamps();
            $table->foreign('id_categoria')
            ->references('id')->on('category_wines');
            $table->foreign('id_user')
            ->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('receitas');
    }
}
