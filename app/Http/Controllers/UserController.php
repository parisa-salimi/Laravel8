<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
public function showregister(){
    return view('register');
}


public function registerpost(Request $request)
{  
    //dd($request);
    $request->validate([
        'name' => 'required|max:255',
        'lastname' => 'required|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => [
            'required',
            'string',
            'min:6',             
            'regex:/[a-z]/',      
            'regex:/[A-Z]/',      
            'regex:/[0-9]/',      
            'regex:/[@$!%*#?&]/', 
        ],
        ]);
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = new User;
        $user->password = bcrypt($request->input('password'));
        $user->role_id = 2; 
        $user->email = $request->email;
        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->save(); 
        return back()->with(['type' => 'success', 'message' =>'successful']);
    
}
    
      
}
