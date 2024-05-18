<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function  showLoginForm(){
        return view('auth.login');
    }
    public function  showAdminLoginForm(){
        return view('auth.adminLogin');
    }
    public  function  adminLogin(Request $request){
        if (Auth::guard('admin')->attempt($request->only(['email','password']), $request->get('remember'))){

            return redirect()->intended('/admin');
        }
        return back()->withInput($request->only('email', 'remember'));

    }

    public  function  login(Request $request){

        if (Auth::guard('web')->attempt($request->only(['email','password']), $request->get('remember'))){

            return redirect()->intended('/');
        }
        return back()->withInput($request->only('email', 'remember'));

    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('/');
    }
}
