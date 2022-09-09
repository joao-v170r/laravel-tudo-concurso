<?php

namespace App\Facades;
use Illuminate\Support\Facades\Facade;

class ApiNews extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'news-api';
    }
}