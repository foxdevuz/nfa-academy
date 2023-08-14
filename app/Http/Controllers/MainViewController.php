<?php

namespace App\Http\Controllers;

use App\Models\Coach;
use App\Models\CoachU11;
use App\Models\CoachU12;
use App\Models\CoachU13;
use App\Models\CoachU14;
use App\Models\CoachU15;
use App\Models\CoachU16;
use App\Models\CoachU17;
use App\Models\CoachU18;
use App\Models\Doctor;
use App\Models\Famous;
use App\Models\Lider;
use App\Models\MainPageNews;
use App\Models\News;
use App\Models\u11;
use App\Models\u12;
use App\Models\u13;
use App\Models\u14;
use App\Models\u15;
use App\Models\u16;
use App\Models\u17;
use App\Models\u18;

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
    public static function breakingNews(){
        $get = News::inRandomOrder()->paginate(10);
        return $get;
    }
    public static function showNews($id) {
        $get = News::findOrfail($id);
        return $get;
    }
    public static function showClubCoach($type) {
        switch($type){
            case 'u11':
                $coach = CoachU11::all();
                break;
            case 'u12':
                $coach = CoachU12::all();
                break;
            case 'u13':
                $coach = CoachU13::all();
                break;
            case 'u14':
                $coach = CoachU14::all();
                break;
            case 'u15':
                $coach = CoachU15::all();
                break;
            case 'u16':
                $coach = CoachU16::all();
                break;
            case 'u17':
                $coach = CoachU17::all();
                break;
            case 'u18':
                $coach = CoachU18::all();
                break;
            default:
                $coach = CoachU18::all();
                break;
        }

        return $coach;
    }
    public static function showClub($type) {
        switch($type){
            case 'u11':
                $club = u11::all();
                break;
            case 'u12':
                $club = u12::all();
                break;
            case 'u13':
                $club = u13::all();
                break;
            case 'u14':
                $club = u14::all();
                break;
            case 'u15':
                $club = u15::all();
                break;
            case 'u16':
                $club = u16::all();
                break;
            case 'u17':
                $club = u17::all();
                break;
            case 'u18':
                $club = u18::all();
                break;
            default:
                $club = u18::all();
                break;
        }

        return $club;
    }
    public static function showLider() {
        $get = Lider::all();
        return $get;
    }
    public static function showDoctor() {
        $get = Doctor::all();
        return $get;
    }
    public static function showCoach() {
        $get = Coach::all();
        return $get;
    }
}
