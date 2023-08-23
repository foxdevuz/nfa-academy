<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Models\Coach;
use App\Models\User;
use Exception;
use Illuminate\Support\Str;

class ClubsController extends Controller
{
    public function store(StoreStudentRequest $request, $club)
    {
        $file = $request->file('file');
        $name = $request->student;
        $birthday = $request->birthday;
        $image = Str::random() . '.' . $file->getClientOriginalExtension();
        try {
            $file->storeAs('/public/images', $image);
            User::create([
                'name' => $name,
                'birthday' => $birthday,
                'club' => $club,
                'image' => $image,
            ]);
            return redirect()
                ->back()
                ->with('success', "O'quvchi qo'shildi");
        } catch (Exception $e) {
            return redirect()
                ->back()
                ->with('error', 'Nimadir xato ketdi... Error Code: ' . $e->getMessage());
        }
    }
    public function showTeam($team)
    {
        $students = User::where('club', $team)->get();
        $coach = Coach::where('club', $team)->get();
        return view('admin.databaseClub.showu11', ['students' => $students, 'coach' => $coach, 'club' => $team]);
    }
    public function clubUpdateOneLever($club){
       switch($club){
            case 'u-11':
                $target = 'u-12';
                break;
            case 'u-12':
                $target = 'u-13';
                break;
            case 'u-13':
                $target = 'u-14';
                break;
            case 'u-14':
                $target = 'u-15';
                break;
            case 'u-15':
                $target = 'u-16';
                break;
            case 'u-16':
                $target = 'u-17';
                break;
            case 'u-17':
                $target = 'u-18';
                break; 
            case 'u-18':
                $target = 'none';
                break;  
            default:
                return redirect()->back()->with('error', "Club is unknown");
                break;
        }
        $user = User::where("club", $club)->get();
        if(!$user){
            return redirect()->back()->with('error', "Team not found");
        }
        foreach($user as $key){
            $key->club = $target;
            $key->save();
        }
        return redirect()->back()->with('error', "Yangilangi");
    }
}
