<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Auth\Middleware\AuthenticateWithBasicAuth;
use App\Facades\ApiNews;

class NewsApiController extends Controller
{   
    private static array $conteudo = ["edital", "concurso"];

    private  static string $linguagem = "pt";

    private  static string $pais = "br";
    private  static string $numbPagina = "br";

    public function index()
    {
        //
    }

    public function fontesNoticias()
    {
        $fontesNoticias = self::getFontesNoticias();        

        return view('news-api.fonte')->with('fontesApi', $fontesNoticias);
    }

    final public static function getFontesNoticias()
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

    final public static function getTopNoticias()
    {
        $principaisNews = [];

        $newsapiTopNoticias = ApiNews::get('top-headlines', ['q' => self::$conteudo, 'language' => self::$linguagem,'country' => self::$pais, 'pageSize' => self::$numbPagina]);

        if($newsapiTopNoticias['status'] == 'ok'){
            $principaisNews = $newsapiTopNoticias['articles'];
        }

        return $principaisNews;
    }
    final public static function getNoticias()
    {
        $principaisNews = [];

        $newsapiTopNoticias = ApiNews::get('everything', ['q' => implode(' AND ', self::$conteudo), 'language' => self::$linguagem]);

        if($newsapiTopNoticias['status'] == 'ok'){
            $principaisNews = $newsapiTopNoticias['articles'];
        }

        return $principaisNews;
    }
}
