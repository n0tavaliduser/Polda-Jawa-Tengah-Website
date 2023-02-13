<?php

namespace App\Http\Controllers;

use App\Models\Official;
use App\Http\Requests\StoreOfficialRequest;
use App\Http\Requests\UpdateOfficialRequest;
use Illuminate\Http\Request;

class OfficialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $name = $request->titleSearch;
        $data = Official::where('name', 'LIKE', '%'.$name.'%')->orderBy('created_at', 'DESC')->paginate(8);
        return view('backends.official', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backends.official-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOfficialRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOfficialRequest $request)
    {
        $input = $request->validate([
            'name' => 'required',
            'position' => 'required',
            'unit' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $destinationPath = 'images/';
            $photo = date('YmdHis') . "op" . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $photo);
            $input['image'] = "$photo";
        } else {
            return redirect()->back();
        }

        Official::create($input);

        return redirect()->route('officialmanager.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Official  $official
     * @return \Illuminate\Http\Response
     */
    public function show(Official $official)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Official  $official
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Official::findOrFail($id);
        return view('backends.official-edit', [
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOfficialRequest  $request
     * @param  \App\Models\Official  $official
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOfficialRequest $request, Official $official, $id)
    {
        $update = $request->validate([
            'name' => 'required',
            'position' => 'required',
            'unit' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $destinationPath = 'images/';
            $photo = date('YmdHis') . "gp" . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $photo);
            $update['image'] = "$photo";
        }

        Official::where('id', $id)->update($update);

        return redirect()->route('officialmanager.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Official  $official
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Official::where('id', $id)->delete();

        return redirect()->route('officialmanager.index');
    }
}
