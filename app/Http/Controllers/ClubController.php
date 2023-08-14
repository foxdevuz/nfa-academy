<?php

namespace App\Http\Controllers;

use App\Models\CoachU11;
use App\Models\CoachU12;
use App\Models\CoachU13;
use App\Models\CoachU14;
use App\Models\CoachU15;
use App\Models\CoachU16;
use App\Models\CoachU17;
use App\Models\CoachU18;
use App\Models\u11;
use App\Models\u12;
use App\Models\u13;
use App\Models\u14;
use App\Models\u15;
use App\Models\u16;
use App\Models\u17;
use App\Models\u18;
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

        #variables
        $club_id = $request->input('club_id');
        $id = $request->input('id');
        switch($club_id){
            case 11:
                $get = u11::find($id);
                break;
            case 12:
                $get = u12::find($id);
                break;
            case 13:
                $get = u13::find($id);
                break;
            case 14:
                $get = u14::find($id);
                break;
            case 15:
                $get = u15::find($id);
                break;
            case 16:
                $get = u16::find($id);
                break;
            case 17:
                $get = u17::find($id);
                break;
            case 18:
                $get = u18::find($id);
                break;
            default:
                $get = null;
        }
        if(!$get){
            return redirect()->back()->with('error', 'Club ID xato!!!');
        }
        Storage::delete('public/images/'.$get->file);
        $get->delete();
        return redirect()->back()->with('success', 'Ma\'lumot o\'chirldi');
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
        switch($club_id){
            case 11:
                $get = CoachU11::find($id);
                break;
            case 12:
                $get = CoachU12::find($id);
                break;
            case 13:
                $get = CoachU13::find($id);
                break;
            case 14:
                $get = CoachU14::find($id);
                break;
            case 15:
                $get = CoachU15::find($id);
                break;
            case 16:
                $get = CoachU16::find($id);
                break;
            case 17:
                $get = CoachU17::find($id);
                break;
            case 18:
                $get = CoachU18::find($id);
                break;
            default:
                $get = null;
        }
        if(!$get){
            return redirect()->back()->with('error', 'Club ID xato!!!');
        }
        Storage::delete('public/images/'.$get->file);
        $get->delete();
        return redirect()->back()->with('success', 'Ma\'lumot o\'chirldi');
    }
}
