<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Subject;
use App\Traits\FileStorage;

class NewsController extends Controller
{
    use FileStorage;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = News::latest()->paginate(10);

        return view('admin.news.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
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
            $image_name = self::crop($request, 708, 472, 'news');
        } else {
            $image_name = '';
        }
        $request->validate([
            'title' => 'required',
            'short' => 'required',
            'desc' => 'required',
            'img' => 'required',
        ]);
        $data = [
            'title' => $request->title,
            'img' => $image_name,
            'short' => $request->short,
            'desc' => $request->desc,
        ];
        $store = News::create($data);

        return redirect()
            ->route('admin.news.index')
            ->with('success', 'News Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $item = News::findOrFail($id);

        return view('admin.news.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $item = News::findOrFail($id);

        return view('admin.news.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $item = News::findOrFail($id);
        if ($request->file('img')) {
            if ($item->img != '') {
                unlink(storage_path('app\public\\' . $item->img));
            }
            $image_name = self::crop($request, 708, 472, 'news');
        } else {
            $image_name = $item->img;
        }

        $request->validate([
            'title' => 'required',
            'short' => 'required',
            'desc' => 'required',
            'img' => 'required',
        ]);

        $data = [
            'title' => $request->title,
            'img' => $image_name,
            'short' => $request->short,
            'desc' => $request->desc,
        ];

        $item->update($data);

        return redirect()
            ->route('admin.news.index')
            ->with('success', 'News updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $item = News::findOrFail($id);

        $item->delete();

        return redirect()
            ->back()
            ->with('success', 'News deleted successfully');
    }
}
