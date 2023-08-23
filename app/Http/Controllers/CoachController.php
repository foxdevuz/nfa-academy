<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCoachRequest;
use App\Models\Coach;
use Illuminate\Support\Str;
use Exception;

class CoachController extends Controller
{
    public function store(StoreCoachRequest $request, $club)
    {
        
        $file = $request->file('file');
        $name = $request->coach;
        $birthday = $request->birthday;
        $image = Str::random() . '.' . $file->getClientOriginalExtension();
        try {
            $file->storeAs('/public/images' , $image);
            Coach::create([
                'name' => $name,
                'birthday' => $birthday,
                'image' => $image,
                'club' => $club,
            ]);
            return redirect()
                ->back()
                ->with('success', "Murabbiy qo'shildi");
        } catch (Exception $e) {
            return redirect()
                ->back()
                ->with('error', 'Nimadir xato ketdi... Error Code: ' . $e->getMessage());
        }
    }
}
