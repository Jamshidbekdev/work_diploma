<?php

namespace App\Http\Controllers\Admin;

use App\Models\EducationCenter;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subject;
use App\Traits\FileStorage;

class EducationCenterController extends Controller
{
    use FileStorage;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = EducationCenter::all();

        return view('admin.education_centers.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.education_centers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->file('img')) {
            $image_name = self::crop($request, 400, 400, 'edu_centers');
        } else {
            $image_name = '';
        }
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'grand' => 'required',
            'all' => 'required',
            'contract' => 'required',
            'phone' => 'required',
        ]);
        $data = [
            'name' => $request->name,
            'img' => $image_name,
            'address' => $request->address,
            'grand' => $request->grand,
            'all' => $request->all,
            'contract' => $request->contract,
            'phone' => $request->phone,
            'desc' => $request->desc,
        ];
        $store = EducationCenter::create($data);

        $subject_ids = Subject::find($request->subjects);

        $store->subjects()->attach($subject_ids);

        return redirect()
            ->route('admin.education.index')
            ->with('success', 'Education Center Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EducationCenter  $educationCenter
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $educationCenter = EducationCenter::findOrFail($id);

        return view('admin.education_centers.show', compact('educationCenter'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EducationCenter  $educationCenter
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $educationCenter = EducationCenter::findOrFail($id);

        return view('admin.education_centers.edit', compact('educationCenter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EducationCenter  $educationCenter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $item = EducationCenter::findOrFail($id);
        if ($request->file('img')) {
            if ($item->img != '') {
                unlink(storage_path('app\public\\' . $item->img));
            }
            $image_name = self::crop($request, 400, 400, 'edu_centers');
        } else {
            $image_name = $item->img;
        }
        $item->subjects()->detach();
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'grand' => 'required',
            'all' => 'required',
            'contract' => 'required',
            'phone' => 'required',
        ]);

        $data = [
            'name' => $request->name,
            'img' => $image_name,
            'address' => $request->address,
            'grand' => $request->grand,
            'all' => $request->all,
            'contract' => $request->contract,
            'phone' => $request->phone,
            'desc' => $request->desc,
        ];

        $item->update($data);
        $subject_ids = Subject::find($request->subjects);

        $item->subjects()->attach($subject_ids);

        return redirect()
            ->route('admin.education.index')
            ->with('success', 'Education Center Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EducationCenter  $educationCenter
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $item = EducationCenter::findOrFail($id);
        if ($item->img != '') {
            unlink(storage_path('app\public\\' . $item->img));
        }
        $item->subjects()->detach();
        $item->delete();

        return redirect()
            ->back()
            ->with('success', 'Education Center Deleted Successfully');
    }
}
