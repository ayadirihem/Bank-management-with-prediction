<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Auth;

class LoginController extends Controller {

    use AuthenticatesUsers;

    protected $username = 'username';
    protected $redirectTo = '/dashboard';
    protected $guard = 'web';

    public function getLogin() {
        return view('login');
    }

    public function postLogin(LoginRequest $request) {


        $credentials = $request->getCredentials();

        if (!$credentials):
            dd($credentials);
            return redirect()->to('/')
            ->with('error','Please check your login information');
        endif;

        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        

        if($user == null){
            return redirect()->to('/')
            ->with('error','Please check your login information');
        }else{
            Auth::login($user);
            return $this->authenticated($request, $user);
        }

        

        
    }

    /**
     * Handle response after user authenticated
     * 
     * @param Request $request
     * @param Auth $user
     * 
     * @return \Illuminate\Http\Response
     */
    protected function authenticated(Request $request, $user) 
    {
        return redirect('panel/dashboard');
    }

    public function getLogout() {
        Session::flush();
        
        Auth::logout();

        return redirect('/');
    }

}
