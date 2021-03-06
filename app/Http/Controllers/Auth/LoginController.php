<?php

namespace App\Http\Controllers\Auth;

use App\Models\Cliente;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    //protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request) {
        $usuario = strtoupper($request->get('usuario'));
        $senha = strtoupper($request->get('senha'));

        $user = Cliente::select('clientes.*')
                        ->where('USUARIO', $usuario)
                        ->where('SENHA', $senha)
                        ->first();

        if($user != null) {
            if($user->COD_TIPO_CLIENTE == 1) {
                Auth::guard('cliente')->login($user);
                return redirect()->route('cliente.home');
            } else if($user->COD_TIPO_CLIENTE == 2) {
                Auth::guard('lojista')->login($user);
                return redirect()->route('lojista.home');
            }
        } else {
            $msg = 'Usuário e senha incorretos!';

            return view('auth.login', compact('msg'));
        }
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('login');
    }
}
