<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Polda;
use App\Models\News;
use App\Models\Galleryphoto;
use App\Models\Galleryvideo;
use App\Models\Photo;
use App\Models\Official;
use App\Http\Requests\StorePoldaRequest;
use App\Http\Requests\UpdatePoldaRequest;
use Illuminate\Http\Request;

class PoldaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $home = Home::all();
        return view('frontends.home', [
            'home' => $home[0]
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function photo(Request $request)
    {
        $search = $request->photosearch;
        $home = Home::first();
        $photo = Galleryphoto::where('title', 'LIKE', '%'.$search.'%')
            ->orderBy('created_at', 'DESC')
            ->paginate(24);
        return view('frontends.photo', [
            'photo' => $photo,
            'home' => $home
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function video(Request $request)
    {
        $title = $request->videosearch;
        $home = Home::first();
        $data = Galleryvideo::select('*')->where('title', 'LIKE', '%'.$title.'%')
            ->orderBy('created_at', 'DESC')
            ->paginate(24);
        return view('frontends.video', [
            'videos' => $data,
            'home' => $home
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function news(Request $request)
    {   
        $title = $request->get('titlesearch');
        $home = Home::first();
        $data = News::select('*')->where('title', 'LIKE', '%'.$title.'%')
            ->orderBy('created_at', 'DESC')
            ->paginate(24);
        return view('frontends.news', [
            'news' => $data,
            'home' => $home
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function news_read_more(Request $request, $slug)
    {   
        $title = $request->titleSearch;
        $allnews = News::select('*')->where('slug', '!=', $slug)->where('title', 'LIKE', '%'.$title.'%')->orderBy('created_at', 'DESC')->paginate(3);
        $data = News::where('slug', $slug)->first();
        $home = Home::first();
        return view('frontends.news-read-more', [
            'news' => $data,
            'othernews' => $allnews,
            'home' => $home
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function official(Request $request)
    {
        $namesearch = $request->namesearch;
        $home = Home::first();
        $data = Official::select('*')->where('name', 'LIKE', '%'.$namesearch.'%')->paginate(24);
        return view('frontends.official', [
            'official' => $data,
            'home' => $home
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        $home = Home::first();
        return view('frontends.contact', [
            'home' => $home
        ]);
    }
}
