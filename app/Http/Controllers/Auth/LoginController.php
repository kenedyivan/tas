<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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
    protected $redirectTo = '/home';

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request){

        $tin = $request->input('tin');

        $users = User::where('tin',$tin)->get();

        $password = null;

        foreach ($users as $user){
            $password = $user->pass;
        }

        //return $tin;



        if ($this->guard()->attempt(['tin' => $tin, 'password' => $password])) {
            // Authentication passed...
            return redirect()->intended($this->redirectTo);
        }

        //return redirect()->back();

        return $this->sendFailedLoginResponse($request);



    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
