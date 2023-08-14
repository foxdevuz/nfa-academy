<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateReqeust;
use App\Models\Coach;
use App\Models\Doctor;
use App\Models\Lider;
use Illuminate\Support\Facades\Storage;

class UpdateContentsController extends Controller
{
    public function updateRoute($editType, $id){
        if($editType == 'coach'){
            #search for existing coach by id
            $coach = Coach::findOrFail($id);
            return view('admin.editContents', [
                'editType'=>$editType,
                'id'=>$id,
                'data'=>$coach
            ]);
        } else if($editType == 'doctors'){
            #search for existing doctor by id
            $doc = Doctor::findOrFail($id);
            return view('admin.editContents', [
                'editType'=>$editType,
                'id'=>$id,
                'data'=>$doc
            ]);
        } else if($editType == 'liders'){
            #search for existing lider by id
            $lider = Lider::findOrFail($id);
            return view('admin.editContents', [
                'editType'=>$editType,
                'id'=>$id,
                'data'=>$lider
            ]);
        } else {
            return redirect()->back()->with('error', 'Please select your edit type first');
        }
    }
    public function update($editType, $id, UpdateReqeust $request){
        #image
        $image = $request->file('image');
        if($editType == 'coach'){
            $coach = Coach::findOrFail($id);
            if(isset($image)){
                Storage::delete('/public/images/' . $coach->image);
                $coach->image = time() . $image->getClientOriginalName();
                $image->storeAs('public/images', $coach->image);
                $coach->name = $request->input('name');
                $coach->birthday = $request->input('birthday');
                $coach->save();
            }
            $coach->name = $request->input('name');
            $coach->birthday = $request->input('birthday');
            $coach->save();
            return redirect()->back()->with('success', 'Yangilandi');
        } else if($editType == 'doctors'){
            $doc = Doctor::findOrFail($id);
            if(isset($image)){
                Storage::delete('/public/images/'. $doc->image);
                $doc->image = time(). $image->getClientOriginalName();
                $image->storeAs('public/images', $doc->image);
                $doc->name = $request->input('name');
                $doc->birthday = $request->input('birthday');
                $doc->save();
            }
            $doc->name = $request->input('name');
            $doc->birthday = $request->input('birthday');
            $doc->save();
            return redirect()->back()->with('success', 'Yangilandi');
        } else if($editType == 'liders'){
            $lider = Lider::findOrFail($id);
            $rank = $request->input('rank');
            if(isset($image)){
                Storage::delete('/public/images/'. $lider->image);
                $lider->image = time(). $image->getClientOriginalName();
                $image->storeAs('public/images', $lider->image);
                $lider->name = $request->input('name');
                $lider->birthday = $request->input('birthday');
                $lider->save();
            }
            if(isset($rank)){
                $lider->rank = $rank;
            }
            $lider->name = $request->input('name');
            $lider->birthday = $request->input('birthday');
            $lider->save();
            return redirect()->back()->with('success', 'Yangilandi');
        } else {
            return redirect()->back()->with('error', 'Please select your edit type first');
        }
    }
}
