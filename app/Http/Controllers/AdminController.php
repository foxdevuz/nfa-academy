<?php
namespace App\Http\Controllers;

use App\Models\Coach;
use App\Models\Doctor;
use App\Models\Event;
use App\Models\Famous;
use App\Models\Lider;
use App\Models\MainPageNews;
use App\Models\News;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.index');
    }
    public function firstPageNews(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'title' => ['required'],
            'file' => ['required', 'file'],
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->with('error', 'Missing required felid');
        }
        $req->file('file')->storeAs('public/images', $req->file('file')->getClientOriginalName());

        MainPageNews::create([
            'title' => $req->input('title'),
            'file' => $req->file('file')->getClientOriginalName(),
        ]);
        return redirect()
            ->back()
            ->with('success', 'Yangilik qo\'shildi ');
    }
    public function ap_showAll()
    {
        $get = MainPageNews::all();
        return view('admin.show', ['all' => $get]);
    }
    public function mainpagenews_destroy(Request $req)
    {
        $validation = Validator::make($req->all(), [
            'id' => ['required'],
        ]);
        if ($validation->fails()) {
            return redirect('/admin/mainPageNew')->with('error', 'ID talab qilinadi');
        }
        $find = MainPageNews::find($req->input('id'));
        if (!$find) {
            return redirect('/admin/mainPageNew')->with('error', 'Ushbu IDdagi ma\'lumot mavjud emas');
        }
        Storage::delete('public/images/' . $find->file);
        $find->delete();
        return redirect('/admin/mainPageNew')->with('success', 'Ma\'lumot o\'chirildi');
    }
    public function addDoc()
    {
        return view('admin.docs');
    }
    public function addCoach()
    {
        return view('admin.coach');
    }
    #add news
    public function addNews()
    {
        return view('admin.addNews');
    }
    public function addNewsBackend(Request $req)
    {
        $validation = Validator::make($req->all(), [
            'title' => ['required'],
            'text' => ['required'],
            'file_1' => ['required', 'file'],
        ]);

        if ($validation->fails()) {
            return redirect('/admin/mainPageNew')->with('error', 'Missing required field(s)');
        }

        $time = Carbon::now();

        $filesToProcess = [];
        for ($i = 1; $i <= 10; $i++) {
            $fileKey = 'file_' . $i;
            if ($req->hasFile($fileKey)) {
                $fileName = $time . $req->file($fileKey)->getClientOriginalName();
                $req->file($fileKey)->storeAs('public/images', $fileName);
                $filesToProcess[$fileKey] = $fileName;
            }
        }

        $data = [
            'name' => $req->input('title'),
            'desc' => $req->input('text'),
        ];
        foreach ($filesToProcess as $key => $fileName) {
            $data[$key] = $fileName;
        }

        News::create($data);

        return redirect()
            ->back()
            ->with('success', 'Yangilik muvaffaqiyatli qo\'shildi');
    }

    public function showNews()
    {
        $get = News::all();
        return view('admin.showNews', ['all' => $get]);
    }

    public function destroyNews(Request $req)
    {
        $validation = Validator::make($req->all(), [
            'id' => ['required'],
        ]);
        if ($validation->fails()) {
            return redirect()
                ->back()
                ->with('error', 'ID talab qilinadi');
        }
        $find = News::find($req->input('id'));
        if (!$find) {
            return redirect()
                ->back()
                ->with('error', 'Ushbu IDdagi ma\'lumot mavjud emas');
        }
        Storage::delete('public/images/' . $find->file);
        $find->delete();
        return redirect()
            ->back()
            ->with('success', 'Ma\'lumot o\'chirildi');
    }
    public function addEvent()
    {
        return view('admin.addEvent');
    }
    #club direction

    #backend
    public function deleteLider(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'id' => ['required'],
        ]);

        if ($validate->fails()) {
            return redirect()
                ->back()
                ->with('error', 'Missing required fields');
        }

        $find = Lider::find($request->input('id'));

        if (!$find) {
            return redirect()
                ->back()
                ->with('error', "ID bo'yicha ma'lumot topilmadi");
        }

        Storage::delete('public/images/' . $find->file);
        $find->delete();
        return redirect()
            ->back()
            ->with('success', 'Ma\'lumot o\'chirldi');
    }
    public function delDocBackend(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'id' => ['required'],
        ]);

        if ($validate->fails()) {
            return redirect()
                ->back()
                ->with('error', 'Missing required fields');
        }

        $find = Doctor::find($request->input('id'));

        if (!$find) {
            return redirect()
                ->back()
                ->with('error', "ID bo'yicha ma'lumot topilmadi");
        }

        Storage::delete('public/images/' . $find->file);
        $find->delete();
        return redirect()
            ->back()
            ->with('success', 'Ma\'lumot o\'chirldi');
    }
    public function addCoachBackend(Request $req)
    {
        $validation = Validator::make($req->all(), [
            'name' => ['required'],
            'birthday' => ['required'],
            'file' => ['required', 'file'],
        ]);

        if ($validation->fails()) {
            return redirect()
                ->back()
                ->with('error', 'Missing required fields');
        }

        try {
            // Insert data
            $file = $req->file('file');
            $imageName = $file->getClientOriginalName();
            $file->storeAs('public/images', $imageName);

            Coach::create([
                'name' => $req->input('name'),
                'birthday' => $req->input('birthday'),
                'image' => $imageName,
                'club' => ' ',
            ]);

            return redirect()
                ->back()
                ->with('success', 'Murabbiy a\'zosi qo\'shildi');
        } catch (Exception $e) {
            return redirect()
                ->back()
                ->with('error', 'Nimadir xato ketdi... Error Text: ' . $e->getMessage());
        }
    }

    public function delCoachBackend(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'id' => ['required'],
        ]);

        if ($validate->fails()) {
            return redirect()
                ->back()
                ->with('error', 'Missing required fields');
        }

        $find = Coach::find($request->input('id'));

        if (!$find) {
            return redirect()
                ->back()
                ->with('error', "ID bo'yicha ma'lumot topilmadi");
        }

        Storage::delete('public/images/' . $find->file);
        $find->delete();
        return redirect()
            ->back()
            ->with('success', 'Ma\'lumot o\'chirldi');
    }
    public function delFamousBackend(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'id' => ['required'],
        ]);

        if ($validate->fails()) {
            return redirect()
                ->back()
                ->with('error', 'Missing required fields');
        }

        $find = Famous::find($request->input('id'));

        if (!$find) {
            return redirect()
                ->back()
                ->with('error', "ID bo'yicha ma'lumot topilmadi");
        }

        Storage::delete('public/images/' . $find->file);
        $find->delete();
        return redirect()
            ->back()
            ->with('success', 'Ma\'lumot o\'chirldi');
    }
    public function delEventBg(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'id' => ['required'],
        ]);

        if ($validate->fails()) {
            return redirect()
                ->back()
                ->with('error', 'Missing required fields');
        }

        $find = Event::find($request->input('id'));

        if (!$find) {
            return redirect()
                ->back()
                ->with('error', "ID bo'yicha ma'lumot topilmadi");
        }

        Storage::delete('public/images/' . $find->file);
        $find->delete();
        return redirect()
            ->back()
            ->with('success', 'Ma\'lumot o\'chirldi');
    }
    public function addFamousBG(Request $req)
    {
        $validation = Validator::make($req->all(), [
            'name' => ['required'],
            'birthday' => ['required'],
            'about' => ['required'],
            'file' => ['required', 'file'],
        ]);

        if ($validation->fails()) {
            return redirect()
                ->back()
                ->with('error', 'Missing required fields');
        }

        #insert data
        $req->file('file')->storeAs('public/images', $req->file('file')->getClientOriginalName());

        Famous::create([
            'name' => $req->input('name'),
            'birthday' => $req->input('birthday'),
            'about' => $req->input('about'),
            'image' => $req->file('file')->getClientOriginalName(),
        ]);

        return redirect()
            ->back()
            ->with('success', "Ma'lumot qo'shildi");
    }
    public function addEventBG(Request $req)
    {
        $validation = Validator::make($req->all(), [
            'event' => ['required'],
            'time' => ['required'],
        ]);

        if ($validation->fails()) {
            return redirect()
                ->back()
                ->with('error', 'Missing required fields');
        }

        Event::create([
            'event' => $req->input('event'),
            'time' => $req->input('time'),
        ]);

        return redirect()
            ->back()
            ->with('success', "Ma'lumot qo'shildi");
    }
    #redirect for database
    public function showLider()
    {
        $get = Lider::all();
        return view('admin.showLider', [
            'lider' => $get,
        ]);
    }
    public function showDoctor()
    {
        $get = Doctor::all();
        return view('admin.showDoctor', [
            'doctor' => $get,
        ]);
    }
    public function showCoach()
    {
        $get = Coach::all();
        return view('admin.showCoach', [
            'coach' => $get,
        ]);
    }
    public function showFamous()
    {
        $get = Famous::all();
        return view('admin.showFamous', [
            'famous' => $get,
        ]);
    }
    public function showEvent()
    {
        $get = Event::all();
        return view('admin.showEvent', [
            'event' => $get,
        ]);
    }
    # add
    public function liderAdd(Request $req)
    {
        $validation = Validator::make($req->all(), [
            'name' => ['required'],
            'birthday' => ['required'],
            'file' => ['required', 'file'],
            'rank' => ['required'],
        ]);

        if ($validation->fails()) {
            return redirect()
                ->back()
                ->with('error', 'Missing required fields');
        }

        #insert data
        $req->file('file')->storeAs('public/images', $req->file('file')->getClientOriginalName());

        Lider::create([
            'name' => $req->input('name'),
            'rank' => $req->input('rank'),
            'birthday' => $req->input('birthday'),
            'image' => $req->file('file')->getClientOriginalName(),
        ]);

        return redirect()
            ->back()
            ->with('success', 'Raxbariyat a\'zosi qo\'shildi');
    }
    public function addDocBackend(Request $req)
    {
        $validation = Validator::make($req->all(), [
            'name' => ['required'],
            'birthday' => ['required'],
            'file' => ['required', 'file'],
        ]);

        if ($validation->fails()) {
            return redirect()
                ->back()
                ->with('error', 'Missing required fields');
        }

        #insert data
        $req->file('file')->storeAs('public/images', $req->file('file')->getClientOriginalName());

        Doctor::create([
            'name' => $req->input('name'),
            'birthday' => $req->input('birthday'),
            'image' => $req->file('file')->getClientOriginalName(),
        ]);

        return redirect()
            ->back()
            ->with('success', 'Shifokor qo\'shildi');
    }

    public function u11()
    {
        return view('admin.u11');
    }
    public function u12()
    {
        return view('admin.u12');
    }
    public function u13()
    {
        return view('admin.u13');
    }
    public function u14()
    {
        return view('admin.u14');
    }
    public function u15()
    {
        return view('admin.u15');
    }
    public function u16()
    {
        return view('admin.u16');
    }
    public function u17()
    {
        return view('admin.u17');
    }
    public function u18()
    {
        return view('admin.u18');
    }
    public function addFamous()
    {
        return view('admin.famous');
    }
}
