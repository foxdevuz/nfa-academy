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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function dashboard() {
        return view('admin.index');
    }
    public function firstPageNews(Request $req) {
        $validator = Validator::make($req->all(), [
            'title'=>['required'],
            'file'=>['required', 'file']
        ]);

        if($validator->fails()){
            return redirect()->back()->with('error', 'Missing required felid');
        }
        $req->file('file')->store('public/images');

        MainPageNews::create([
            'title'=>$req->input('title'),
            'file'=>$req->file('file')->hashName()
        ]);
        return redirect()->back()->with('success', 'Yangilik qo\'shildi ');
    }
    # admin panel direction btw ap = admin panel
    public function ap_showAll() {
        $get = MainPageNews::all();
        return view('admin.show', ['all'=>$get]);
    }
    public function mainpagenews_destroy(Request $req){
        $validation = Validator::make($req->all(), [
            'id'=>['required']
        ]);
        if($validation->fails()){
            return redirect('/admin/mainPageNew')->with('error', 'ID talab qilinadi');
        }
        $find = MainPageNews::find($req->input('id'));
        if(!$find){
            return redirect('/admin/mainPageNew')->with('error', 'Ushbu IDdagi ma\'lumot mavjud emas');
        }
        Storage::delete('public/images/'.$find->file);
        $find->delete();
        return redirect('/admin/mainPageNew')->with('success', 'Ma\'lumot o\'chirildi');
    }
    #add news
    public function addNews() {
        return view('admin.addNews');
    }
    public function addNewsBackend(Request $req) {
        $validation = Validator::make($req->all(), [
            'title'=>['required'],
            'text'=>['required'],
            'file'=>['required', 'file'],
        ]);

        if($validation->fails()){
            return redirect('/admin/mainPageNew')->with('error', 'Missing required field(s)');
        }
        #save image
        $req->file('file')->store('public/images');
        News::create([
            'name'=>$req->input('title'),
            'desc'=>$req->input('text'),
            'file'=>$req->file('file')->hashName()
        ]);
        return redirect()->back()->with('success', 'Yangilik muvoffaqiyatli qo\'shildi');
    }
    public function showNews() {
        $get = News::all();
        return view('admin.showNews', ['all'=>$get]);
    }

    public function destroyNews(Request $req) {
        $validation = Validator::make($req->all(), [
            'id'=>['required']
        ]);
        if($validation->fails()){
            return redirect()->back()->with('error', 'ID talab qilinadi');
        }
        $find = News::find($req->input('id'));
        if(!$find){
            return redirect()->back()->with('error', 'Ushbu IDdagi ma\'lumot mavjud emas');
        }
        Storage::delete('public/images/'.$find->file);
        $find->delete();
        return redirect()->back()->with('success', 'Ma\'lumot o\'chirildi');
    }

    #club direction
    public function u11() {
        return view('admin.u11');
    }
    public function u12() {
        return view('admin.u12');
    }
    public function u13() {
        return view('admin.u13');
    }
    public function u14() {
        return view('admin.u14');
    }
    public function u15() {
        return view('admin.u15');
    }
    public function u16() {
        return view('admin.u16');
    }
    public function u17() {
        return view('admin.u17');
    }
    public function u18() {
        return view('admin.u18');
    }

    # club backend
    public function u11CoachBackend(Request $request) {
        $validation = Validator::make($request->all(), [
            'coach'=>['required'],
            'birthday'=>['required'],
            'file'=>['required', 'file'],
        ]);

        if($validation->fails()){
            return redirect()->back()->with('error', 'Missing required fields');
        }

        #insert data
        $request->file('file')->store('public/images');

        CoachU11::create([
            'name'=>$request->input('coach'),
            'birthday'=>$request->input('birthday'),
            'image'=>$request->file('file')->hashName(),
        ]);

        return redirect()->back()->with('success', 'Murabbiy qo\'shildi!!!');
    }
    public function u11StudentBackend(Request $request) {
        $validation = Validator::make($request->all(), [
            'student'=>['required'],
            'birthday'=>['required'],
            'file'=>['required', 'file'],
        ]);

        if($validation->fails()){
            return redirect()->back()->with('error', 'Missing required fields');
        }

        #insert data
        $request->file('file')->store('public/images');

        u11::create([
            'name'=>$request->input('student'),
            'birthday'=>$request->input('birthday'),
            'image'=>$request->file('file')->hashName(),
        ]);

        return redirect()->back()->with('success', 'O\'quvchi qo\'shildi!!!');
    }
    public function u12CoachBackend(Request $request) {
        $validation = Validator::make($request->all(), [
            'coach'=>['required'],
            'birthday'=>['required'],
            'file'=>['required', 'file'],
        ]);

        if($validation->fails()){
            return redirect()->back()->with('error', 'Missing required fields');
        }

        #insert data
        $request->file('file')->store('public/images');

        CoachU12::create([
            'name'=>$request->input('coach'),
            'birthday'=>$request->input('birthday'),
            'image'=>$request->file('file')->hashName(),
        ]);

        return redirect()->back()->with('success', 'Murabbiy qo\'shildi!!!');
    }
    public function u12StudentBackend(Request $request) {
        $validation = Validator::make($request->all(), [
            'student'=>['required'],
            'birthday'=>['required'],
            'file'=>['required', 'file'],
        ]);

        if($validation->fails()){
            return redirect()->back()->with('error', 'Missing required fields');
        }

        #insert data
        $request->file('file')->store('public/images');

        u12::create([
            'name'=>$request->input('student'),
            'birthday'=>$request->input('birthday'),
            'image'=>$request->file('file')->hashName(),
        ]);

        return redirect()->back()->with('success', 'O\'quvchi qo\'shildi!!!');
    }
    public function u13CoachBackend(Request $request) {
        $validation = Validator::make($request->all(), [
            'coach'=>['required'],
            'birthday'=>['required'],
            'file'=>['required', 'file'],
        ]);

        if($validation->fails()){
            return redirect()->back()->with('error', 'Missing required fields');
        }

        #insert data
        $request->file('file')->store('public/images');

        CoachU13::create([
            'name'=>$request->input('coach'),
            'birthday'=>$request->input('birthday'),
            'image'=>$request->file('file')->hashName(),
        ]);

        return redirect()->back()->with('success', 'Murabbiy qo\'shildi!!!');
    }
    public function u13StudentBackend(Request $request) {
        $validation = Validator::make($request->all(), [
            'student'=>['required'],
            'birthday'=>['required'],
            'file'=>['required', 'file'],
        ]);

        if($validation->fails()){
            return redirect()->back()->with('error', 'Missing required fields');
        }

        #insert data
        $request->file('file')->store('public/images');

        u13::create([
            'name'=>$request->input('student'),
            'birthday'=>$request->input('birthday'),
            'image'=>$request->file('file')->hashName(),
        ]);

        return redirect()->back()->with('success', 'O\'quvchi qo\'shildi!!!');
    }
    public function u14CoachBackend(Request $request) {
        $validation = Validator::make($request->all(), [
            'coach'=>['required'],
            'birthday'=>['required'],
            'file'=>['required', 'file'],
        ]);

        if($validation->fails()){
            return redirect()->back()->with('error', 'Missing required fields');
        }

        #insert data
        $request->file('file')->store('public/images');

        CoachU14::create([
            'name'=>$request->input('coach'),
            'birthday'=>$request->input('birthday'),
            'image'=>$request->file('file')->hashName(),
        ]);

        return redirect()->back()->with('success', 'Murabbiy qo\'shildi!!!');
    }
    public function u14StudentBackend(Request $request) {
        $validation = Validator::make($request->all(), [
            'student'=>['required'],
            'birthday'=>['required'],
            'file'=>['required', 'file'],
        ]);

        if($validation->fails()){
            return redirect()->back()->with('error', 'Missing required fields');
        }

        #insert data
        $request->file('file')->store('public/images');

        u14::create([
            'name'=>$request->input('student'),
            'birthday'=>$request->input('birthday'),
            'image'=>$request->file('file')->hashName(),
        ]);

        return redirect()->back()->with('success', 'O\'quvchi qo\'shildi!!!');
    }
    public function u15CoachBackend(Request $request) {
        $validation = Validator::make($request->all(), [
            'coach'=>['required'],
            'birthday'=>['required'],
            'file'=>['required', 'file'],
        ]);

        if($validation->fails()){
            return redirect()->back()->with('error', 'Missing required fields');
        }

        #insert data
        $request->file('file')->store('public/images');

        CoachU15::create([
            'name'=>$request->input('coach'),
            'birthday'=>$request->input('birthday'),
            'image'=>$request->file('file')->hashName(),
        ]);

        return redirect()->back()->with('success', 'Murabbiy qo\'shildi!!!');
    }
    public function u15StudentBackend(Request $request) {
        $validation = Validator::make($request->all(), [
            'student'=>['required'],
            'birthday'=>['required'],
            'file'=>['required', 'file'],
        ]);

        if($validation->fails()){
            return redirect()->back()->with('error', 'Missing required fields');
        }

        #insert data
        $request->file('file')->store('public/images');

        u15::create([
            'name'=>$request->input('student'),
            'birthday'=>$request->input('birthday'),
            'image'=>$request->file('file')->hashName(),
        ]);

        return redirect()->back()->with('success', 'O\'quvchi qo\'shildi!!!');
    }
    public function u16CoachBackend(Request $request) {
        $validation = Validator::make($request->all(), [
            'coach'=>['required'],
            'birthday'=>['required'],
            'file'=>['required', 'file'],
        ]);

        if($validation->fails()){
            return redirect()->back()->with('error', 'Missing required fields');
        }

        #insert data
        $request->file('file')->store('public/images');

        CoachU16::create([
            'name'=>$request->input('coach'),
            'birthday'=>$request->input('birthday'),
            'image'=>$request->file('file')->hashName(),
        ]);

        return redirect()->back()->with('success', 'Murabbiy qo\'shildi!!!');
    }
    public function u16StudentBackend(Request $request) {
        $validation = Validator::make($request->all(), [
            'student'=>['required'],
            'birthday'=>['required'],
            'file'=>['required', 'file'],
        ]);

        if($validation->fails()){
            return redirect()->back()->with('error', 'Missing required fields');
        }

        #insert data
        $request->file('file')->store('public/images');

        u16::create([
            'name'=>$request->input('student'),
            'birthday'=>$request->input('birthday'),
            'image'=>$request->file('file')->hashName(),
        ]);

        return redirect()->back()->with('success', 'O\'quvchi qo\'shildi!!!');
    }
    public function u17CoachBackend(Request $request) {
        $validation = Validator::make($request->all(), [
            'coach'=>['required'],
            'birthday'=>['required'],
            'file'=>['required', 'file'],
        ]);

        if($validation->fails()){
            return redirect()->back()->with('error', 'Missing required fields');
        }

        #insert data
        $request->file('file')->store('public/images');

        CoachU17::create([
            'name'=>$request->input('coach'),
            'birthday'=>$request->input('birthday'),
            'image'=>$request->file('file')->hashName(),
        ]);

        return redirect()->back()->with('success', 'Murabbiy qo\'shildi!!!');
    }
    public function u17StudentBackend(Request $request) {
        $validation = Validator::make($request->all(), [
            'student'=>['required'],
            'birthday'=>['required'],
            'file'=>['required', 'file'],
        ]);

        if($validation->fails()){
            return redirect()->back()->with('error', 'Missing required fields');
        }

        #insert data
        $request->file('file')->store('public/images');

        u17::create([
            'name'=>$request->input('student'),
            'birthday'=>$request->input('birthday'),
            'image'=>$request->file('file')->hashName(),
        ]);

        return redirect()->back()->with('success', 'O\'quvchi qo\'shildi!!!');
    }
    public function u18CoachBackend(Request $request) {
        $validation = Validator::make($request->all(), [
            'coach'=>['required'],
            'birthday'=>['required'],
            'file'=>['required', 'file'],
        ]);

        if($validation->fails()){
            return redirect()->back()->with('error', 'Missing required fields');
        }

        #insert data
        $request->file('file')->store('public/images');

        CoachU18::create([
            'name'=>$request->input('coach'),
            'birthday'=>$request->input('birthday'),
            'image'=>$request->file('file')->hashName(),
        ]);

        return redirect()->back()->with('success', 'Murabbiy qo\'shildi!!!');
    }
    public function u18StudentBackend(Request $request) {
        $validation = Validator::make($request->all(), [
            'student'=>['required'],
            'birthday'=>['required'],
            'file'=>['required', 'file'],
        ]);

        if($validation->fails()){
            return redirect()->back()->with('error', 'Missing required fields');
        }

        #insert data
        $request->file('file')->store('public/images');

        u18::create([
            'name'=>$request->input('student'),
            'birthday'=>$request->input('birthday'),
            'image'=>$request->file('file')->hashName(),
        ]);

        return redirect()->back()->with('success', 'O\'quvchi qo\'shildi!!!');
    }
    public function deleteLider(Request $request) {
        $validate = Validator::make($request->all(), [
            'id'=>['required']
        ]);

        if($validate->fails()){
            return redirect()->back()->with('error', 'Missing required fields');
        }

        $find = Lider::find($request->input('id'));

        if(!$find){
            return redirect()->back()->with('error', "ID bo'yicha ma'lumot topilmadi");
        }

        Storage::delete('public/images/'.$find->file);
        $find->delete();
        return redirect()->back()->with('success', 'Ma\'lumot o\'chirldi');
    }
    #redirect for database
    public function showU11() {
        $get = u11::all();
        $getCoach = CoachU11::all();
        return view('admin.databaseClub.showu11', [
            'all'=>$get,
            'coach'=>$getCoach
        ]);
    }
    public function showU12() {
        $get = u12::all();
        $getCoach = CoachU12::all();
        return view('admin.databaseClub.showu12', [
            'all'=>$get,
            'coach'=>$getCoach
        ]);
    }
    public function showU13() {
        $get = u13::all();
        $getCoach = CoachU13::all();
        return view('admin.databaseClub.showu13', [
            'all'=>$get,
            'coach'=>$getCoach
        ]);
    }
    public function showU14() {
        $get = u14::all();
        $getCoach = CoachU14::all();
        return view('admin.databaseClub.showu14', [
            'all'=>$get,
            'coach'=>$getCoach
        ]);
    }
    public function showU15() {
        $get = u15::all();
        $getCoach = CoachU15::all();
        return view('admin.databaseClub.showu15', [
            'all'=>$get,
            'coach'=>$getCoach
        ]);
    }
    public function showU16() {
        $get = u16::all();
        $getCoach = CoachU16::all();
        return view('admin.databaseClub.showu16', [
            'all'=>$get,
            'coach'=>$getCoach
        ]);
    }
    public function showU17() {
        $get = u17::all();
        $getCoach = CoachU17::all();
        return view('admin.databaseClub.showu17', [
            'all'=>$get,
            'coach'=>$getCoach
        ]);
    }
    public function showU18() {
        $get = u18::all();
        $getCoach = CoachU18::all();
        return view('admin.databaseClub.showu18', [
            'all'=>$get,
            'coach'=>$getCoach
        ]);
    }
    public function showLider() {
        $get = Lider::all();
        return view('admin.showLider', [
            'lider'=>$get
        ]);
    }
    # add lider
    public function liderAdd(Request $req) {
        $validation = Validator::make($req->all(), [
            'name'=>['required'],
            'birthday'=>['required'],
            'file'=>['required', 'file'],
            'rank'=>['required'],
        ]);

        if($validation->fails()){
            return redirect()->back()->with('error', 'Missing required fields');
        }

        #insert data
        $req->file('file')->store('public/images');

        Lider::create([
            'name'=>$req->input('name'),
            'rank'=>$req->input('rank'),
            'birthday'=>$req->input('birthday'),
            'image'=>$req->file('file')->hashName(),
        ]);

        return redirect()->back()->with('success', 'Raxbariyat a\'zosi qo\'shildi');
    }
}
