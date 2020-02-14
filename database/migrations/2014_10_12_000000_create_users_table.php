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
            $table->bigIncrements('id');
            
            /* DADOS DO USUÁRIO
            ================================================== */
            $table->string('name'); ## NOME
            $table->string('email')->nullable(); ## E-MAIL
            $table->string('password'); ## SENHA
            $table->timestamp('email_verified_at')->nullable(); ## VERIFICAÇÃO

            $table->rememberToken(); ## LEMBRAR
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
