<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        // Validar los datos del formulario si es necesario
        $request->validate([
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Crear un nuevo usuario en la base de datos
        $user = new User;
        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->city = $request->city;
        $user->state = $request->state;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        // Puedes iniciar sesión automáticamente después del registro si lo deseas
        // auth()->login($user);

        // Redireccionar a la página de inicio o a donde desees después del registro
        return redirect()->route('session')->with('success', '¡Registro exitoso!');
    }

    public function login(Request $request){

        //Validación

        $credentials = [
            "email" => $request->email,
            "password" => $request->password,
            //"active" => true
        ];

        $remember = ($request->has('remember') ? true : false);

        if(Auth::attempt($credentials,$remember)){

            $request->session()->regenerate();

            return redirect()->intended(route('homeapp'));

        }else{
            return redirect('session');
        }
        
    }

    public function index()
    {
        $user = Auth::user();
        return view('homeapp', ['user' => $user]);
    }
}