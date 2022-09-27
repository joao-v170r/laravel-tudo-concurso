<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Facades\ApiNews;

class NoticiaController extends Controller
{
    //
    public function index(Request $request)
    {
        #$newsapi = NewsApiController::getFontesNoticias();

        return view('noticias.index');
    }

    public function store(Request $request)
    { 
        $serie = CardsNotice::create(['im_caminho_img' => 'C:\Users\joaov\Dropbox\Projetos Software\Lojinha\public\css', 'concurso_id' => null, 'no_titulo_noticia' => 'Exemplo Teste', 'tp_conteudo_card' => 'um exmplo de um conteudo card', 'ds_descricao_card' => 'um exmplo de um conteudo card', 'url_noticia' => 'https://meet.google.com/ghw-thqu-ibp?pli=1&authuser=0', 'tp_informacao_card' => 'concurso','dt_criacao_card' => date('Y-m-d') ]);

        return $serie;
    }
}
