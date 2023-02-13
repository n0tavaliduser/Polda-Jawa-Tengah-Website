<?php

namespace App\Http\Controllers;

use App\Models\Galleryvideo;
use App\Http\Requests\StoreGalleryvideoRequest;
use App\Http\Requests\UpdateGalleryvideoRequest;
use Illuminate\Http\Request;

class GalleryvideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $title = $request->titleSearch;
        $video = Galleryvideo::where('title', 'LIKE', '%'.$title.'%')->orderBy('created_at', 'DESC')->paginate(8);
        return view('backends.video', [
            'video' => $video
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backends.video-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGalleryvideoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGalleryvideoRequest $request)
    {
        $input = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        if ($request->hasFile('video')) {
            $video = $request->file('video');
            $destinationPath = 'videos/';
            $videoProfile = date('YmdHis') . "gv" . "." . $video->getClientOriginalExtension();
            $video->move($destinationPath, $videoProfile);
            $input['video'] = "$videoProfile";
        } else {
            return redirect()->route('galleryvideo.index');
        }

        Galleryvideo::create($input);

        return redirect()->route('galleryvideo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Galleryvideo  $galleryvideo
     * @return \Illuminate\Http\Response
     */
    public function show(Galleryvideo $galleryvideo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Galleryvideo  $galleryvideo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Galleryvideo::findOrFail($id);
        return view('backends.video-edit', [
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGalleryvideoRequest  $request
     * @param  \App\Models\Galleryvideo  $galleryvideo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGalleryvideoRequest $request, Galleryvideo $galleryvideo)
    {
        $update = $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        if ($request->hasFile('video')) {
            $video = $request->file('video');
            $destinationPath = 'videos/';
            $profileVideo = date('YmdHis') . 'vg.' . $video->getClientOriginalExtension();
            $video->move($destinationPath, $profileVideo);
            $update['video'] = $profileVideo;
        } else {
            $update['video'] = $galleryvideo->video;
        }

        $galleryvideo->update($update);

        return redirect()->route('galleryvideo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Galleryvideo  $galleryvideo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Galleryvideo::where('id', $id)->delete();

        return redirect()->route('galleryvideo.index');
    }
}
