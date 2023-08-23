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
}
