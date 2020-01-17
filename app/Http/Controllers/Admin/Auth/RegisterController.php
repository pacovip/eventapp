<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:admin');
    }
    
    private function validator(Request $request)
    {
        //validation rules.        
        $rules = [
            'email'    => 'required|email|unique:admins|min:5|max:191',
            'password' => 'required|string|min:6|max:255',
        ];
        //custom validation error messages.
        $messages = [
            'email.exists' => 'Email ou mot de passe incorrecte.',
        ];
        //validate the request.
        $request->validate($rules,$messages);
    }
    
    
    public function showAdminRegisterForm()
    {
        return view('admin.auth.register', ['url' => 'admin']);
    }
    
    
    protected function createAdmin(Request $request)
    {
        //Validation...
        $this->validator($request);
        $admin = Admin::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->intended('/admin');
    }
}
