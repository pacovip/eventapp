<?php

namespace App\Http\Controllers\Admin\Auth;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;

//use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
    }
    
    protected $redirectTo = '/admin';
    
    /**
     * Show the login form.
     * 
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('admin.auth.login',[
            'title' => 'Admin Login',
            'loginRoute' => 'admin.login',
            'forgotPasswordRoute' => 'admin.password.request',
        ]);
    }    
    
    /**
     * Validate the form data.
     * 
     * @param \Illuminate\Http\Request $request
     * @return 
     */
    private function validator(Request $request)
    {
        //validation rules.
        /*
         * $rules = [
            'email'    => 'required|email|unique:admins|min:5|max:191',
            'password' => 'required|string|min:4|max:255',
        ];
         */
        $rules = [
            'email'    => 'required|email',
            'password' => 'required|min:6',
        ];
        //custom validation error messages.
        $messages = [
            'email.exists' => 'Email ou mot de passe incorrecte.',
        ];
        //validate the request.
        $request->validate($rules,$messages);
    }
    
    /**
     * Login the admin.
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        //Validation...
        $this->validator($request);
        
        //Login the admin...
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            return redirect()->intended('/admin');
        }
        //Authentication failed...
        return $this->loginFailed();
    }
    
    
    
    /**
     * Logout the admin.
     * 
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        //logout the admin...
        Auth::guard('admin')->logout();
        return redirect()
            ->route('admin.login')
            ->with('status','Deconnecté !');
    }
    
    
    /**
     * Redirect back after a failed login.
     * 
     * @return \Illuminate\Http\RedirectResponse
     */
    private function loginFailed()
    {
        //return back()->withErrors('error','Email ou mot de passe incorrecte !')->withInput($request->only('email', 'remember'));
        return back()
            ->withInput()
            ->withErrors(['error'=>'Email ou mot de passe incorrecte!']);/**/
    }
}
