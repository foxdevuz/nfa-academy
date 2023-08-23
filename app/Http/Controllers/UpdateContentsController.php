<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateReqeust;
use App\Models\Coach;
use App\Models\Doctor;
use App\Models\Lider;
use App\Models\User;
use Illuminate\Support\Str;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UpdateContentsController extends Controller
{
    public function updateRoute($editType, $id)
    {
        if ($editType == 'coach') {
            #search for existing coach by id
            $coach = Coach::findOrFail($id);
            return view('admin.editContents', [
                'editType' => $editType,
                'id' => $id,
                'data' => $coach,
            ]);
        } elseif ($editType == 'doctors') {
            #search for existing doctor by id
            $doc = Doctor::findOrFail($id);
            return view('admin.editContents', [
                'editType' => $editType,
                'id' => $id,
                'data' => $doc,
            ]);
        } elseif ($editType == 'liders') {
            #search for existing lider by id
            $lider = Lider::findOrFail($id);
            return view('admin.editContents', [
                'editType' => $editType,
                'id' => $id,
                'data' => $lider,
            ]);
        } else {
            return redirect()
                ->back()
                ->with('error', 'Please select your edit type first');
        }
    }
    public function update($editType, $id, UpdateReqeust $request)
    {
        #image
        $image = $request->file('image');
        if ($editType == 'coach') {
            $coach = Coach::findOrFail($id);
            if (isset($image)) {
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
            return redirect()
                ->back()
                ->with('success', 'Yangilandi');
        } elseif ($editType == 'doctors') {
            $doc = Doctor::findOrFail($id);
            if (isset($image)) {
                Storage::delete('/public/images/' . $doc->image);
                $doc->image = time() . $image->getClientOriginalName();
                $image->storeAs('public/images', $doc->image);
                $doc->name = $request->input('name');
                $doc->birthday = $request->input('birthday');
                $doc->save();
            }
            $doc->name = $request->input('name');
            $doc->birthday = $request->input('birthday');
            $doc->save();
            return redirect()
                ->back()
                ->with('success', 'Yangilandi');
        } elseif ($editType == 'liders') {
            $lider = Lider::findOrFail($id);
            $rank = $request->input('rank');
            if (isset($image)) {
                Storage::delete('/public/images/' . $lider->image);
                $lider->image = time() . $image->getClientOriginalName();
                $image->storeAs('public/images', $lider->image);
                $lider->name = $request->input('name');
                $lider->birthday = $request->input('birthday');
                $lider->save();
            }
            if (isset($rank)) {
                $lider->rank = $rank;
            }
            $lider->name = $request->input('name');
            $lider->birthday = $request->input('birthday');
            $lider->save();
            return redirect()
                ->back()
                ->with('success', 'Yangilandi');
        } else {
            return redirect()
                ->back()
                ->with('error', 'Please select your edit type first');
        }
    }
    public function teamEditRoute()
    {
        try {
            $user = User::where('id', request('id'))->first();

            return view('admin.databaseClub.editTeam', [
                'id' => request('id'),
                'club' => request('club_id'),
                'data' => $user,
            ]);
        } catch (Exception $e) {
            return redirect()
                ->back()
                ->with('error', $e->getMessage());
        }
    }
    public function caochEditRoute()
    {
        try {
            $user = Coach::where('id', request('id'))->first();

            return view('admin.databaseClub.editCoach', [
                'id' => request('id'),
                'club' => request('club_id'),
                'data' => $user,
            ]);
        } catch (Exception $e) {
            return redirect()
                ->back()
                ->with('error', $e->getMessage());
        }
    }
    public function updateTeam(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
            'name' => ['required'],
            'birthday' => ['required'],
        ]);

        if ($validate->fails()) {
            return redirect()
                ->back()
                ->with('error', $validate->errors()->first());
        }

        try {
            $user = User::find($id);

            if ($request->hasFile('image')) {
                if (!empty($user->image)) {
                    Storage::delete('public/images/' . $user->image);
                }
                $image = $request->file('image');
                $imageExtension = $image->getClientOriginalExtension();
                $imageName = Str::random() . '.' . $imageExtension; // 40 characters long random name
                $image->storeAs('public/images', $imageName);
                $user->image = $imageName;
            }

            $user->name = $request->input('name');
            $user->birthday = $request->input('birthday');
            $user->save();

            return redirect()
                ->back()
                ->with('success', "Muvoffaqiyatli yangilandi");
        } catch (Exception $e) {
            return redirect()
                ->back()
                ->with('error', $e->getMessage());
        }
    }
    public function updateCaoch(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
            'name' => ['required'],
            'birthday' => ['required'],
        ]);

        if ($validate->fails()) {
            return redirect()
                ->back()
                ->with('error', $validate->errors()->first());
        }

        try {
            $user = Coach::find($id);

            if ($request->hasFile('image')) {
                if (!empty($user->image)) {
                    Storage::delete('public/images/' . $user->image);
                }
                $image = $request->file('image');
                $imageExtension = $image->getClientOriginalExtension();
                $imageName = Str::random() . '.' . $imageExtension; // 40 characters long random name
                $image->storeAs('public/images', $imageName);
                $user->image = $imageName;
            }

            $user->name = $request->input('name');
            $user->birthday = $request->input('birthday');
            $user->save();

            return redirect()
                ->back()
                ->with('success', "Muvoffaqiyatli yangilandi");
        } catch (Exception $e) {
            return redirect()
                ->back()
                ->with('error', $e->getMessage());
        }
    }
}
