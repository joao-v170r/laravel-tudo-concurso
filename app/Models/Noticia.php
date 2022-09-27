<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    use HasFactory;

    protected $fillable = ['im_caminho_img', 'concurso_id', 'no_titulo_noticia', 'tp_conteudo', 'ds_descricao', 'url_noticia','url_img', 'tp_informacao', 'dt_publicacao'];
}
