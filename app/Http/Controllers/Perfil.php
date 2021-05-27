<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class Perfil extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        return view('perfil.profile', ['users' => $user]);
    }

    //Editar nombre
    public function showName()
    {
        $user = auth()->user();
        return view('perfil.editName', ['users' => $user]);
    }

    public function editName(Request $req)
    {
        $user = auth()->user();
        $id = $user->id;

        $usuario = User::find($id);
        $usuario->name = $req->name;

        if ($usuario->save()) {
            return redirect('/profile');
        } else {
            return redirect('/profile/edit/name');
        }
    }

    //Editar Email
    public function showEmail()
    {
        $user = auth()->user();
        return view('perfil.editEmail', ['users' => $user]);
    }

    public function editEmail(Request $req)
    {
        $user = auth()->user();
        $id = $user->id;

        $usuario = User::find($id);
        $usuario->email = $req->email;

        if ($usuario->save()) {
            return redirect('/profile');
        } else {
            return redirect('/profile/edit/email');
        }
    }

    //Editar contraseña
    public function showPass()
    {
        $user = auth()->user();
        return view('status.404', ['users' => $user]);
    }
}
