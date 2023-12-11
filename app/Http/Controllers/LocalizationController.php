<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LocalizationController extends Controller
{
    public function changeLang($lan)
    {
        App::setLocale($lan);
        Session::put("locale", $lan);
        return redirect()->back();
    }
}
