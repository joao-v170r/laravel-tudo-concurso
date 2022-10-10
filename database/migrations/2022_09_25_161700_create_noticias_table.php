<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Concurso;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticias', function (Blueprint $table) {
            $table->id();
            $table->text('im_caminho_img')->nullable();
            $table->foreignIdFor(Concurso::class)->nullable();
            $table->string('no_titulo_noticia', 300);
            $table->text('tp_conteudo');
            $table->text('ds_descricao')->nullable();
            $table->text('url_noticia')->nullable();            
            $table->text('url_img')->nullable();
            $table->set('tp_informacao', ['concurso', 'noticia', 'blog']);
            $table->date('dt_publicacao');
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
        Schema::dropIfExists('noticias');
    }
};
