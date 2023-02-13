<?php

namespace App\Http\Controllers;

use App\Models\Skck;
use App\Models\Home;
use App\Http\Requests\StoreSkckRequest;
use App\Http\Requests\UpdateSkckRequest;
use Illuminate\Http\Request;

class SkckController extends Controller
{
    public function index(Request $request)
    {
        $niksearch = $request->nikSearch;
        $data = Skck::select('*')->where('nomoridentitas', '11831')->paginate(8);
        return view('backends.skck', [
            'skck' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $home = Home::first();
        $data = Skck::select('*')->where('nomoridentitas', Auth()->user()->email)->paginate(8);
        return view('backends.skck-add', [
            'skck' => $data,
            'user' => Auth()->user(),
            'home' => $home
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSkckRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSkckRequest $request)
    {
        $input = $request->validate([
            'keperluan' => 'required',
            'identitas' => 'required',
            'nopassport' => 'required',
            'tingkatkewenangan' => 'required',
            'nomoridentitas' => 'required',
            'nomorkitas' => 'required',
            'fullname' => 'required',
            'notelp' => 'required',
            'tanggallahir' => 'required',
            'jeniskelamin' => 'required',
            'agama' => 'required',
            'pekerjaan' => 'required',
            'tempatlahir' => 'required',
            'statusperkawinan' => 'required',
            'warganegara' => 'required',
            'beratbadan' => 'required',
            'tinggi' => 'required',
            'bentukwajah' => 'required',
            'rambut' => 'required',
            'kulit' => 'required',
            'tandaistimewa' => 'required',
            'alamatktp' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'provinsi' => 'required',
            'kecamatan' => 'required',
            'kabupaten' => 'required',
            'desa' => 'required',
            'domisili' => 'required',
            'alamatsekarang' => 'required',
            'rtsekarang' => 'required',
            'rwsekarang' => 'required',
            'provinsisekarang' => 'required',
            'kecamatansekarang' => 'required',
            'kabupatensekarang' => 'required',
            'desasekarang' => 'required',
        ]);

        $input['status'] = 'pengajuan';

        Skck::create($input);

        return redirect()->route('frontend-home')->with('success', 'Skck berhasil diajukan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Skck  $skck
     * @return \Illuminate\Http\Response
     */
    public function show(Skck $skck)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Skck  $skck
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Skck::findOrFail($id);
        return view('backends.skck-update', [
            'skck' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSkckRequest  $request
     * @param  \App\Models\Skck  $skck
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSkckRequest $request, Skck $skck, $id)
    {
        if ($request->get('status') == 'Pilih Status Baru') {
            return redirect()->route('skckmanager.index');
        }else {
            $skck->where('id', $id)->update(array('status' => $request->get('status')));
            return redirect()->route('skckmanager.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Skck  $skck
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skck $skck)
    {
        $skck->where('id', $id)->delete();
        return redirect()->route('skckmanager.index');
    }
}
