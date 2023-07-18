<?php

namespace App\Http\Controllers;

use App\Models\Famous;
use App\Models\MainPageNews;
use App\Models\News;

class MainViewController extends Controller
{
    public function index() {
        return view('welcome', [
            'clubMain' => MainPageNews::latest()->get(),
            'news'=>News::inRandomOrder()->get(),
            'famous'=>Famous::all(),
            'birthday'=>BirthdayController::birthday()
        ]);
    }
}
