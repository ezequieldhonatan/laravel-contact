<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');

            /* DADOS DO CONTATO (MODULE 2.1)
            ================================================== */
            $table->ipAddress('ip')->nullable(); ## IP
            
            $table->string('name')->nullable(); ## NOME
            $table->string('email')->nullable(); ## E-MAIL
            $table->string('cell_phone')->nullable(); ## CELULAR
            $table->string('annex')->nullable(); ## ANEXO
            $table->text('message')->nullable(); ## MENSAGEM

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
        Schema::dropIfExists('contacts');
    }
}
