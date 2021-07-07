<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTablePostsAddColumnIds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('consulta', function (Blueprint $table) {
            $table->unsignedBigInteger('paciente_id');
            $table->foreign('paciente_id')->references('id')->on('paciente');

            $table->unsignedBigInteger('medico_id');
            $table->foreign('medico_id')->references('id')->on('medico');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('consulta', function (Blueprint $table) {
            $table->dropForeign('consulta_paciente_id_foreign');
            $table->dropColumn('paciente_id');
 
            $table->dropForeign('consulta_medico_id_foreign');
            $table->dropColumn('medico_id');
        });
    }
}
