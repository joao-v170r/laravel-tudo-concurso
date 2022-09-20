<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CardsNotice;

class CardsNoticeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function index(Request $request)
    {
        #$noticias = CardsNotice::query()->get();

        return view('cardsNoticias.index');
    }

    public function store(Request $request)
    { 
        $serie = CardsNotice::create(['im_caminho_img' => 'C:\Users\joaov\Dropbox\Projetos Software\Lojinha\public\css', 'concurso_id' => null, 'no_titulo_noticia' => 'Exemplo Teste', 'tp_conteudo_card' => 'um exmplo de um conteudo card', 'ds_descricao_card' => 'um exmplo de um conteudo card', 'url_noticia' => 'https://meet.google.com/ghw-thqu-ibp?pli=1&authuser=0', 'tp_informacao_card' => 'concurso','dt_criacao_card' => date('Y-m-d') ]);

        return $serie;
    }
    
    private function consomeNewApi(): mixed
    {
        $newapiNotcias = new NewsApi("28f70b4db401446f84b649a5bc7c9b0a");

        return $newapiNotcias->getSources();
    }
}
