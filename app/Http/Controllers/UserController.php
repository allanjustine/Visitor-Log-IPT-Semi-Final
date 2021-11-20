<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index() {
        $users = User::orderByRaw('lname,fname')->get();
        return view('users.index', ['users'=>$users]);
    }

    public function create(){
        return view('users.create');
    }

    public function store(Request $request){

        $this->validate($request, [
            'lname'     => 'required|regex:/^[\pL\s\-]+$/u|max:255|unique:users,lname',
            'fname'     => 'required|regex:/^[\pL\s\-]+$/u|max:255|unique:users,fname',
            'email'     => 'required|unique:users,email,',
            'password'  => 'required'
        ]);

        User::create([
            'lname'     => $request['lname'],
            'fname'     => $request['fname'],
            'email'     => $request['email'],
            'password'  => bcrypt($request['password'])
        ]);

        return redirect('/users')->with('info', 'New user has been added.');
    }
}
