<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->enum('tipouser', array('Administrador', 'Utilizador', 'Produtor'));
            $table->string('email')->unique();
            $table->string('password');
            $table->string('name');
            $table->string('apelido');
            $table->date('data_nasc')->nullable();
            $table->enum('genero', array('Masculino', 'Feminino', 'Nao Revelar', 'Nao Definido'))->default('Nao Definido');
            $table->string('img')->default('Sem Imagem');
            $table->string('pais')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::table('users', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
}
