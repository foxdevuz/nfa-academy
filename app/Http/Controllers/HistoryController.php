<?php

namespace App\Http\Controllers;

use App\Http\Requests\HistoryStoreReqest;
use App\Models\History;
use Exception;

class HistoryController extends Controller
{
    public function storeHistory(HistoryStoreReqest $req){
        try{
            $req->file('image')->storeAs('public/images/', $req->file('image')->getClientOriginalName());
            History::create([
                'title'=>$req->input('title'),
                'text'=>$req->input('text'),
                'image'=>$req->file('image')->getClientOriginalName()
            ]);
            return redirect()->back()->with('success', 'Tarix qo\'shildi');
        }catch(Exception $e){
            return redirect()->back()->with('error', 'Nimadir xato ketdi,  qaytadan urunib ko\'ring. Error message'. $e->getMessage());
        }
    }
}
