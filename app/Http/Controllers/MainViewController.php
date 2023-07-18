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
            'birthday'=>BirthdayController::birthday(),
            'event'=>EventController::event()
        ]);
    }
    public static function breakingNews()
    {
        $get = News::inRandomOrder()->paginate(10);
        return $get;
    }
    public static function showNews($id) {
        $get = News::find($id);
        return $get;
    }

}
