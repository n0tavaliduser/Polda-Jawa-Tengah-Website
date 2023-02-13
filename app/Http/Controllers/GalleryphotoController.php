<?php

namespace App\Http\Controllers;

use App\Models\Galleryphoto;
use App\Http\Requests\StoreGalleryphotoRequest;
use App\Http\Requests\UpdateGalleryphotoRequest;
use Illuminate\Http\Request;

class GalleryphotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $title = $request->titleSearch;
        $photo = Galleryphoto::where('title', 'LIKE', '%'.$title.'%')
            ->orderBy('created_at', 'DESC')
            ->paginate(8);
        return view('backends.photo', [
            'photo' => $photo,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backends.photo-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGalleryphotoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGalleryphotoRequest $request)
    {
        $input = $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $destinationPath = 'images/';
            $photo = date('YmdHis') . "gp" . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $photo);
            $input['gambar'] = "$photo";
        } else {
            return redirect()->route('backend-photo')->with('message', 'Data gambar tidak ada');
        }

        Galleryphoto::create($input);

        return redirect()->route('galleryphoto.index')->with('message', 'Data gambar berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Galleryphoto  $galleryphoto
     * @return \Illuminate\Http\Response
     */
    public function show(Galleryphoto $galleryphoto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Galleryphoto  $galleryphoto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Galleryphoto::findOrFail($id);
        return view('backends.photo-edit', [
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGalleryphotoRequest  $request
     * @param  \App\Models\Galleryphoto  $galleryphoto
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGalleryphotoRequest $request, Galleryphoto $galleryphoto)
    {
        $update = $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "gp" . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $update['gambar'] = "$profileImage";
        } else {
            $update['gambar'] = "$galleryphoto->gambar";
        }

        $galleryphoto->update($update);

        return redirect()->route('galleryphoto.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Galleryphoto  $galleryphoto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Galleryphoto::where('id', $id)->delete();

        return redirect()->route('galleryphoto.index')->with('message', 'Data berhasil di hapus');
    }
}
