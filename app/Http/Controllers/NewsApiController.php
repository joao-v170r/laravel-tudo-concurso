<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Auth\Middleware\AuthenticateWithBasicAuth;
use App\Facades\ApiNews;

class NewsApiController extends Controller
{   
    private static string $conteudo = "concurso";

    private  static string $linguagem = "pt";

    private  static string $pais = "br";

    public function index()
    {
        //
    }

    public function fontesNoticias()
    {
        $fontesNoticias = self::getFontesNoticias();        

        return view('news-api.fonte')->with('fontesApi', $fontesNoticias);
    }

    public static function getFontesNoticias()
    {
        /**
         * @var array $fontsNews
         */
        $fontsNews;

        $newsapiFontes = ApiNews::get('top-headlines/sources', ['q' => self::$conteudo, 'language' => self::$linguagem,'country' => self::$pais])->json();

        if($newsapiFontes['status'] == 'ok'){
            $fontsNews = $newsapiFontes['sources'];
        }

        return $fontsNews;
    }
}
