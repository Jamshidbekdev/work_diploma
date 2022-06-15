<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\EducationCenter;
use Illuminate\Support\Facades\Storage;
use App\Models\News;
use App\Models\EducationCenterAndSubject;
use Image;
use App\Models\Subject;
use DB;
use Illuminate\Database\Eloquent\Builder;
use App\Helpers\PaginationHelper;

class AdminController extends Controller
{
    public function index()
    {
        $items = EducationCenter::latest()->paginate(10);

        return view('admin.dashboard', compact('items'));
    }

    public function profile()
    {
        $user = Auth::user();

        return view('admin.profile.profile', compact('user'));
    }

    public function profileUpdate(Request $request)
    {
        $user = Auth::user();
        if ($request->file('img')) {
            // dd($request);
            $request->validate([
                'name' => 'required|min:3',
                'img' => 'required|mimes:jpg,jpeg,png|max:2048',
                'email' => 'required',
            ]);
            if ($user->img != '') {
                unlink(storage_path('app\public\\' . $user->img));
            }
            //Make directory for avatar
            Storage::disk('public')->makeDirectory('thumbs');

            // $image_name = $request->file('img')->store('users',['disk'=>'public']);
            $image_name = time() . $request->file('img')->getClientOriginalName();
            $full_path_thumb = storage_path('app/public/thumbs/' . $image_name);

            // Crop Image
            $thumbs = Image::make($request->file('img'));
            $thumbs
                ->fit(400, 400, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save($full_path_thumb);

            $image_name = 'thumbs/' . $image_name;
            // dd($image_name);
        } else {
            $request->validate([
                'name' => 'required',
                'email' => 'required',
            ]);

            $image_name = $user->img;
        }
        if ($request->password != '') {
            $this->validate($request, [
                'password' => 'required|confirmed|min:6',
            ]);
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'img' => $image_name,
                'password' => $request->password,
            ];
        }

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'img' => $image_name,
        ];
        // dd($data);
        $user = User::find(auth()->user()->id);

        $user->update($data);

        return redirect()
            ->back()
            ->with('success', 'Profile updated successfully');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        return redirect()->route('home');
    }

    public function homePage()
    {
        $cnt = 0;
        for ($i = 1; $i <= intval(round(News::count() / 3)); $i++) {
            $items[] = News::skip($cnt)
                ->take(3)
                ->get();
            $cnt += 3;
        }

        $data = EducationCenter::get()->sortByDesc(function($item){
            return ($item->grand + $item->contract) * 100 / $item->all;
        });

        $new_data = $data->pluck('id');

        $data = PaginationHelper::paginate($data,7);

        $subject = EducationCenterAndSubject::get()->groupBy('subject_id',function ($item) {
            return $item->subject_id;
        })->sortByDesc(function($item){
            return count($item);
        });

        $subject = $subject->keys();

        return view('home', compact(['items', 'data', 'new_data', 'subject']));
    }

    public function search(Request $request)
    {
        $items = EducationCenter::where('name', 'LIKE', '%' . $request->get('q') . '%')
            ->orWhere('desc', 'LIKE', '%' . $request->get('q') . '%')
            ->orWhere('address', 'LIKE', '%' . $request->get('q') . '%')
            ->orWhere('phone', 'LIKE', '%' . $request->get('q') . '%')
            ->get();

        return view('admin.search', compact('items'));
    }

    public function home_search(Request $request)
    {
        $q = $request->q;
        $cnt = 0;
        for ($i = 1; $i <= intval(round(News::count() / 3)); $i++) {
            $items[] = News::skip($cnt)
                ->take(3)
                ->get();
            $cnt += 3;
        }

        $data = EducationCenter::get()->sortByDesc(function($item){
            return ($item->grand + $item->contract) * 100 / $item->all;
        });

        $new_data = $data->pluck('id');


        $subject = EducationCenterAndSubject::get()->groupBy('subject_id',function ($item) {
            return $item->subject_id;
        })->sortByDesc(function($item){
            return count($item);
        });

        $subject = $subject->keys();

        $data = EducationCenter::with('subjects')->whereHas('subjects',function(Builder $query) use($q){
            return $query->whereIn('subject_id',$q);
        })->get();

        // dd($data);

        $data = PaginationHelper::paginate($data,7);
        $data->appends($request->input());

        // dd($data);

        return view('home', compact(['items', 'data','new_data', 'q','subject']));
    }
}
