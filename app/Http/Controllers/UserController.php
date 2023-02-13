<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $nama = $request->nameSearch;
        $data = User::select('*')->where('name', 'LIKE', '%'.$nama.'%')
            ->orderBy('created_at', 'DESC')
            ->where('email', '!=', auth()->user()->email)
            ->paginate(10);
        return view('backends.user', [
            'users' => $data
        ]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->validate([
            'name' => 'required',
            'role' => 'required'
        ]);

        $nameForEmail = str_replace(' ', '', $request->name);
        if (strlen($nameForEmail) > 7) {
            $nameForEmail = substr($nameForEmail, 0, 7);
        }
        $input['email'] = strtolower($nameForEmail) . '@' . $request->role . '.com';

        $input['password'] = Hash::make('abcd1234');

        User::create($input);
        
        return redirect()->route('webuser.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $update['role'] = $request->role;

        if ($update['role'] == null) {
            $update['role'] = 'masyarakat';
        }

        if ($request->suspend == 'on') {
            $update['role'] = 'banned';
        } else {
            if ($request['role'] == 'banned') {
                $update['role'] = 'masyarakat';
            }
        }

        if ($update['role'] != 'masyarakat' || $update['role'] != 'banned') {
            $nameForEmail = str_replace(' ', '', $request->name);
            if (strlen($nameForEmail) > 7) {
                $nameForEmail = substr($nameForEmail, 0, 7);
            }
            $update ['email'] = strtolower($nameForEmail) . '@' . $request->role . '.com';
        }

        User::where('id', $id)->update($update);

        return redirect()->route('webuser.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
