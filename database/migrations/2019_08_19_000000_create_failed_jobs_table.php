<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFailedJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('failed_jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            /* TRABALHOS COM FALHA
            ================================================== */
            $table->text('connection'); ## CONEXÃO
            $table->text('queue'); ## FILA
            $table->longText('payload'); ## CARGA
            $table->longText('exception'); ## EXCEÇÃO
            $table->timestamp('failed_at')->useCurrent(); ## FALHA
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('failed_jobs');
    }
}
