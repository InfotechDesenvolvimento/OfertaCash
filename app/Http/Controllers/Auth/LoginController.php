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

    public function login(Request $request) {
        $usuario = strtoupper($request->get('usuario'));
        $senha = strtoupper($request->get('senha'));

        $user = null;

        $user = Cliente::where('USUARIO', $usuario)->where('SENHA', $senha)->first();

        echo $usuario;

        if($user != null) {
            if($user->cod_tipo_cliente == 1) {
                Auth::guard('cliente')->login($user);
                return redirect()->route('cliente.home');
            } else if($user->cod_tipo_cliente == 2) {
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
