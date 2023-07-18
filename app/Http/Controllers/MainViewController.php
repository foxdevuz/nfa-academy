<?php

namespace App\Http\Controllers;

use App\Models\MainPageNews;
use App\Models\News;
use Illuminate\Http\Request;

class MainViewController extends Controller
{
    public function index() {
        return view('welcome', [
            'clubMain' => MainPageNews::latest()->get(),
            'news'=>News::inRandomOrder()->get(),
        ]);
    }
}
