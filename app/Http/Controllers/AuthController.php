<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    //Register
    public function register()
    {
        return view('Auth/register');
    }

    public function login()
    {
        return view('Auth/login');
    }

    public function create_user(request  $request)
    {
        // Validation des donnees du formulaire
         $validation = $request->validate([
            'name' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'age' => 'required|integer|min:3',
            'adresse' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        $user = new User;
        $user -> name =   $validation['name'];
        $user -> prenom =  $validation['prenom'];
        $user -> age =  $validation['age'];
        $user -> adresse =  $validation['adresse'];
        $user -> email =  $validation['email'];
        $user -> password =  Hash::make($validation['password']);
        $user -> remember_token = str::random(40);
        $user ->save();

        Auth::login($user);

        return redirect()->route('login')->with('success',  'Inscription reussie vous pouvez vous connecter');

    }

    public function logins(Request $request)
    {
        $verification = $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6',
        ]);

        // Tentative de connexion
        if (Auth::attempt($verification)) {
            // Régénération de la session
            $request->session()->regenerate();

            // Redirection
            return redirect()->route('annexes.index');
        }

        // Gestion des erreurs
        return back()->withErrors([
            'email' => "Les informations d'identification fournies ne correspondent pas à nos enregistrements.",
        ])->onlyInput('email');
    }


}
