<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Http;

class ApiNewsProvider extends ServiceProvider
{   
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('news-api', function () {
            return Http::withOptions([
                'verify' => false,
                'base_uri' => 'https://newsapi.org/v2/' 
            ])->withHeaders([
                'X-Api-Key' => '28f70b4db401446f84b649a5bc7c9b0a',
            ]);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
