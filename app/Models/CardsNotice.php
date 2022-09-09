<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardsNotice extends Model
{
    use HasFactory;

    protected $table = "cards_notices";

    protected $fillable = ['im_caminho_img', 'concurso_id', 'no_titulo_noticia', 'tp_conteudo_card', 'ds_descricao_card', 'url_noticia', 'tp_informacao_card', 'dt_criacao_card'];
}
