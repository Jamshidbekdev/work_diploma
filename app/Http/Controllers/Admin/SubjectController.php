<?php

namespace App\Http\Controllers\Admin;

use App\Models\Subject;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Subject::latest()->paginate(10);

        return view('admin.subjects.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.subjects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
            ],
            [
                'name.required' => 'Name field would be required!',
            ],
        );
        $data = [
            'name' => $request->name,
        ];

        Subject::create($data);

        return redirect()
            ->route('admin.subject.index')
            ->with('success', 'Subject Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $subject = Subject::findOrFail($id);

        return view('admin.subjects.show', compact('subject'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $subject = Subject::findOrFail($id);

        return view('admin.subjects.edit', compact('subject'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $request->validate(
            [
                'name' => 'required',
            ],
            [
                'name.required' => 'Name field would be required!',
            ],
        );
        $item = Subject::findOrFail($id);

        $data = [
            'name' => $request->name,
        ];

        $item->update($data);

        return redirect()
            ->route('admin.subject.index')
            ->with('success', 'Subject Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $item = Subject::findOrFail($id);

        $item->delete();

        return redirect()
            ->back()
            ->with('success', 'Subject Deleted Successfully');
    }
}
