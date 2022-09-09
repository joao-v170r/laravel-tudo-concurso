<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Auth\Middleware\AuthenticateWithBasicAuth;
use App\Facades\ApiNews;

class NewsApiController extends Controller
{   
    private string $conteudo = "concurso";

    private string $linguagem = "pt";

    private string $pais = "br";

    public function index()
    {
        //
    }

    public function fontesNoticias()
    {
        $fontsNews = [];

        $newsapiFontes = ApiNews::get('top-headlines/sources', ['q' => $this->conteudo, 'language' => $this->linguagem,'country' => $this->pais])->json();
        
        if($newsapiFontes['status'] == 'ok'){
            $fontsNews = $newsapiFontes['sources'];
        }

        return view('NewsApi.fonte')->with('fontesApi', $fontsNews);
    }
}
