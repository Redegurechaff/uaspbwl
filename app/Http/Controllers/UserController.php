<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=User::get();
        return view('users/index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $data['email'] = $request->email;
    $data['name'] = $request->name;
    $data['password'] = Hash::make($request->password);
    $data['user_alamat'] = $request->user_alamat;
    $data['user_hp'] = $request->user_hp;
    $data['user_pos'] = $request->user_pos;
    $data['user_role'] = $request->user_role;
    $data['user_aktif'] = $request->user_aktif;

    User::create($data);
    return redirect()->route('user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=User::find($id);
        return view('users/edit', compact('data'));
       
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
    $data['email'] = $request->email;
    $data['name'] = $request->name;
    $data['password'] = Hash::make($request->password);
    $data['user_alamat'] = $request->user_alamat;
    $data['user_hp'] = $request->user_hp;
    $data['user_pos'] = $request->user_pos;
    $data['user_role'] = $request->user_role;
    $data['user_aktif'] = $request->user_aktif;

    User::whereId($id)->update($data);
    return redirect()->route('user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=User::find($id);
        $data->delete();
        return redirect()->route('user');
    }
}
