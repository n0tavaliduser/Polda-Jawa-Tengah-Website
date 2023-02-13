<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $title = $request->titleSearch;
        $news = News::where('title', 'LIKE', '%'.$title.'%')->orderBy('created_at', 'DESC')->paginate(8);
        return view('backends.news', [
            'news' => $news
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backends.news-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNewsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNewsRequest $request)
    {
        $input = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'gambar' => 'required',
        ]);

        $input['slug'] = Str::slug($request->title);

        if ($image = $request->file('gambar')) {
            $destinationPath = 'images/';
            $photo = date('YmdHis') . "ni" . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $photo);
            $input['image'] = "$photo";
        }

        $input['author'] = auth()->user()->email;

        News::create($input);

        return redirect()->route('newsmanager.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = News::findOrFail($id);
        return view('backends.news-edit', [
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNewsRequest  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNewsRequest $request, $id)
    {
        $update = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $update['author'] = auth()->user()->email;
        $update['slug'] = Str::slug($request->title);

        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $destinationPath = 'images/';
            $photo = date('YmdHis') . "ni" . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $photo);
            $update['image'] = "$photo";
        }
        
        DB::table('news')->where('id', $id)->update($update);

        return redirect()->route('newsmanager.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        News::where('id', $id)->delete();

        return redirect()->route('newsmanager.index');
    }
}
