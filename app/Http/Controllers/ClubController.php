<?php

namespace App\Http\Controllers;

use App\Models\Coach;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ClubController extends Controller
{
    public function deleteClubMember(Request $request) {
        $validator = Validator::make($request->all(), [
            'id'=>['required'],
            'club_id'=>['required'],
        ]);

        if($validator->fails()){
            return redirect()->back()->with('error', 'Missing required fields');
        }
        $club_id = $request->input('club_id');
        $id = $request->input('id');

        try {
            $student = User::where('id', $id)->where('club', $club_id)->first();
            if($student){
                Storage::delete('public/images'. $student->image);
                $student->delete();
                return redirect()->back()->with('success', "Ma'lumot o'chirildi!");
            } else {
                return redirect()->back()->with('error', 'ID xato');
            }
        } catch(Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    public function deleteCoach(Request $request) {
        $validator = Validator::make($request->all(), [
            'id'=>['required'],
            'club_id'=>['required'],
        ]);

        if($validator->fails()){
            return redirect()->back()->with('error', 'Missing required fields');
        }

        #variables
        $club_id = $request->input('club_id');
        $id = $request->input('id');
        try {
            $coach = Coach::where('id', $id)->where('club', $club_id)->first();
            if($coach){
                Storage::delete('public/images'. $coach->image);
                $coach->delete();
                return redirect()->back()->with('success', "Ma'lumot o'chirildi!");
            } else {
                return redirect()->back()->with('error', 'ID xato');
            }
        } catch(Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
