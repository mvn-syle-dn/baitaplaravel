<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
trait AuthenticatesUsers{
  
}
class UserController extends Controller
{
    public function showlogin()
    {
        return view('login');
    }
    public function showAdmin()
    {
        if (Auth::check()) {
            return view('adminpage');
        }
        return redirect()->route('showLogin');
    }
    public function login(Request $request)
    {
        $data = $request->only('email', 'password');
        if (Auth::guard('web')->attempt($data)) {
            return redirect()->route('adminPage');
        } else {
            return redirect()->route('showLogin');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('showLogin');
    }
    public function create()
    {
        return view('User.createuser');
    }
    public function store(CreateUserRequest $request)
    {
        $data=$request->all();
        $data['password']=Hash::make($request->password);
        $user=User::create($data);
        return redirect()->route('showUser');
    }
    public function show()
    {
        $users = User::all();
        return view('User.showuser', compact('users'));
    }
    public function edit($id)
    {
        $user = User::find($id);
        return view('User.edit', compact('user'));
    }
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;
        $user->save();
        return redirect()->back();
    }
    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('showUser');
    }
}
