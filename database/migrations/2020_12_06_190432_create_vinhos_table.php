<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVinhosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vinhos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->biginteger('id_categoria')->unsigned();
            $table->biginteger('id_produtor')->unsigned();
            $table->string('img')->nullable();
            $table->longText('descricao');
            $table->string('regiao');
			$table->integer('qnt_cl');
			$table->integer('perct_alco');
            $table->foreign('id_categoria')
            ->references('id')->on('category_wines');
            $table->foreign('id_produtor')
            ->references('id')->on('users');
            $table->timestamps();
            $table->softDeletes();
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
