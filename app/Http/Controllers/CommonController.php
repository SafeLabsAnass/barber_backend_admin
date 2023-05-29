<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;

abstract class CommonController extends Controller
{
    public function languageTranslate(string $lang)
    {
        App::setLocale($lang);
        session()->put("locale", $lang);
    }
}
