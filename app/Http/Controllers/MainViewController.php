<?php

namespace App\Http\Controllers;

use App\Models\Coach;
use App\Models\Doctor;
use App\Models\Famous;
use App\Models\Lider;
use App\Models\MainPageNews;
use App\Models\News;
use App\Models\User;

class MainViewController extends Controller
{
    public function index()
    {
        return view('welcome', [
            'clubMain' => MainPageNews::latest()->get(),
            'news' => News::orderByDesc('id')->get(),
            'famous' => Famous::all(),
            'birthday' => BirthdayController::birthday(),
            'event' => EventController::event(),
        ]);
    }
    public static function breakingNews()
    {
        $get = News::orderByDesc('id')->paginate(10);
        return $get;
    }
    public static function showNews($id)
    {
        $get = News::where('id', $id)
            ->where(function ($query) {
                for ($i = 1; $i <= 10; $i++) {
                    $fileColumn = 'file_' . $i;
                    $query->orWhereNotNull($fileColumn);
                }
            })
            ->get();
        return $get;
    }
    public static function showClubCoach($type)
    {
        $coach = Coach::where('club', $type)->get();

        return $coach;
    }
    public static function showClub($type)
    {
        $club = User::where('club', $type)->get();
        return $club;
    }
    public static function showLider()
    {
        $get = Lider::all();
        return $get;
    }
    public static function showDoctor()
    {
        $get = Doctor::all();
        return $get;
    }
    public static function showCoach()
    {
        $get = Coach::all();
        return $get;
    }
}
