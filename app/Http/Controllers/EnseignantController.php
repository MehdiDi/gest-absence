<?php

namespace App\Http\Controllers;
use App\Departement;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class EnseignantController extends Controller
{
    public function register(){
        $depts = Departement::all();
        return view('auth.outRegister')->with('depts', $depts);
    }

    public function registerUser(Request $request){

        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->dept_id = $request->input('departement');
        $user->adresse = $request->input('addresse');

        $user->save();
        
        if (Auth::attempt(['email' => $user->email, 'password' => Hash::make($user->password)])) {
            
            return redirect()->intended('home');
                    
        }
        
        return redirect('/login');
    }
}
