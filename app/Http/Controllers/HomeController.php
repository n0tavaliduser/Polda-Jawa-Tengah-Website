<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Http\Requests\StoreHomeRequest;
use App\Http\Requests\UpdateHomeRequest;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()->role == 'masyarakat') {
            return redirect()->route('skckmanager.create');
        } else if (auth()->user()->role == 'banned') {
            return view('backends.banned');
        } else {
            return view('backends.dashboard');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHomeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHomeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function show($id = 1)
    {
        $home = Home::findOrFail($id);
        return view('backends.home', compact('home'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function edit(Home $home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHomeRequest  $request
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHomeRequest $request, Home $home)
    {
        $input = $request->validate([
            'herotext' => 'required',
            'moto' => 'required',
            'leftcardtitle' => 'required',
            'centercardtitle' => 'required',
            'rightcardtitle' => 'required',
            'leftcardtext' => 'required',
            'centercardtext' => 'required',
            'rightcardtext' => 'required',
            'mail' => 'required',
            'address' => 'required',
        ]);

        $oldData = Home::all();

        if ($request->hasFile('heroimage')) {
            $image = $request->file('heroimage');
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "hi" . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['heroimage'] = "$profileImage";
        }else {
            $input['heroimage'] = $oldData[0]->heroimage;
        }
        if ($request->hasFile('leftcardimage')) {
            $image = $request->file('leftcardimage');
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "lci" . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['leftcardimage'] = "$profileImage";
        }else {
            $input['leftcardimage'] = $oldData[0]->leftcardimage;
        }
        if ($request->hasFile('centercardimage')) {
            $image = $request->file('centercardimage');
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "cci" . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['centercardimage'] = "$profileImage";
        }else {
            $input['centercardimage'] = $oldData[0]->centercardimage;
        }
        if ($request->hasFile('rightcardimage')) {
            $image = $request->file('rightcardimage');
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "rci" . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['rightcardimage'] = "$profileImage";
        }else {
            $input['rightcardimage'] = $oldData[0]->rightcardimage;
        }

        $home->update($input);

        return redirect()->back()->with('message', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function destroy(Home $home)
    {
        //
    }
}
