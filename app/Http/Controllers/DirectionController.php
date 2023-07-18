<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DirectionController extends Controller
{
    public function breakingNews() {
        return view('extra.breakingNews', [
            'news'=>MainViewController::breakingNews()
        ]);
    }
    public function showNews(Request $req) {
        return view('extra.idpage', [
            'news'=>MainViewController::showNews($req->input('id'))
        ]);
    }
    public function clubNews() {
        return view('extra.clubNews');
    }
    public function u11(Request $request) {
        return view('club.u-club');
    }
    public function clubHistory() {
        return view('club.history');
    }
    public function contact() {
        return view('extra.contact');
    }
    public function lider() {
        return view('extra.liders');
    }
    public function doctors() {
        return view('extra.doctors');
    }
    public function coach(){
        return view('extra.coach');
    }
    public function addLiders() {
        return view('admin.liders');
    }
}
