<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users');
    }

    public function getusers()
    {
        $users = User::all()->sortByDesc('id');
        return view('users', [
            'users' => $users,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $request = $request->all();
        $users = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
        ]);
        //check if user has been saved and populate view
        if ($users) {
            return redirect()->route('users.get')
            ->withSuccess('User Successfully Saved');
        }else {
            return redirect()->route('users.create')
            ->withErrors('Error');
        }
        
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
        $user = User::find($id);
       
        return view('edit', [
         'user' =>$user,   
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        $request = $request->all();
        $user = User::find($id);
        $user->update($request);
       if ($user) {
            return redirect()->route('users.get')
            ->withSuccess('User Successfully Updated');
        }else {
            return redirect()->route('users.create')
            ->withErrors('Error');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::destroy($id);
        if ($user) {
            return redirect()->route('users.get')
            ->withSuccess('User Successfully Deleted');
           
        }else {
            return redirect()->view('users')
            ->withErrors('Failed');
        }
    }
}
