<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class HomeController extends CommonController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->languageTranslate("French");
        $this->middleware("auth");
    }

    /**
     * Show the application dashboard.
     *
     * @return Application|RedirectResponse|Redirector
     */
    public function index()
    {
        if (Auth::check()) {
            Auth::logout();
        }
        return redirect("admin/login");
    }
}
