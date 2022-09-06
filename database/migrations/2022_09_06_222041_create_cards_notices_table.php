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
        Schema::create('cards_notices', function (Blueprint $table) {
            $table->id();
            $table->text('im_caminho_img', 350)->nullable();;
            $table->foreignIdFor(Concurso::class)->nullable();
            $table->string('no_titulo_noticia', 300);
            $table->text('tp_conteudo_card');
            $table->text('ds_descricao_card')->nullable();;
            $table->text('url_noticia')->nullable();;
            $table->set('tp_informacao_card', ['concurso', 'noticia', 'blog']);
            $table->date('dt_criacao_card');
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
        Schema::dropIfExists('cards_notices');
    }
};
