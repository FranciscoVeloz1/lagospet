<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Animal;

class Animales extends Controller
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
        $animal = Animal::all();
        return view('animals.animals', [
            'users' => $user,
            'animals' => $animal
        ]);
    }

    public function list()
    {
        return response()->json(Animal::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = auth()->user();
        return view('animals.add', ['users' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $animal = new Animal();
        $animal->nombre = $req->nombre;
        $animal->raza = $req->raza;
        $animal->edad = $req->edad;
        $animal->condicion = $req->condicion;

        if ($animal->save()) {
            return redirect('/animals');
        } else {
            return redirect('/animals/add');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $animal = Animal::find($id);
        $user = auth()->user();
        return view('animals/edit', [
            'animal' => $animal,
            'users' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $animal = Animal::find($id);
        $animal->nombre = $req->nombre;
        $animal->raza = $req->raza;
        $animal->edad = $req->edad;
        $animal->condicion = $req->condicion;

        if ($animal->save()) {
            return redirect('/animals');
        } else {
            return redirect('/animals/edit/' . $id);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Animal::destroy($id);
        return redirect('/animals');
    }
}
