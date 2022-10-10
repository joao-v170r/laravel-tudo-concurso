<?php

use App\Models\Cargo;
use App\Models\Concurso;
use App\Models\TCNPerfil;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cargos_concursos', function (Blueprint $table) {
            $table->foreignIdFor(Cargo::class);
            $table->foreignIdFor(Concurso::class);
            $table->float('nu_salario_cargo', 8, 2);
            $table->foreignIdFor(TCNPerfil::class);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cargos_concursos');
    }
};
