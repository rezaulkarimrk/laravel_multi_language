<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Config;

class languageController extends Controller
{
    //language change controller
    public function switchLang($lang)
    {
        if(array_key_exists($lang, Config::get('language'))){
            Session::put('applocal', $lang);
        }
    }
}
