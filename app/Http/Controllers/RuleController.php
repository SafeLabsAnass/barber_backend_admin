<?php

namespace App\Http\Controllers;

use App\AdminSetting;
use Html2Text\Html2Text;
use Illuminate\Support\Facades\DB;

class RuleController extends CommonController
{
    public function __construct()
    {
        $this->languageTranslate("French");
    }

    public function getTermsAndConditions()
    {
        $setting = DB::table("adminsetting")->first();
        return view("rules.terms", ["terms" => $setting->terms_conditions]);
    }

    public function getPrivacyPolicy()
    {
        $setting = DB::table("adminsetting")->first();
        return view("rules.policy", ["policy" => $setting->privacy_policy]);
    }
}
