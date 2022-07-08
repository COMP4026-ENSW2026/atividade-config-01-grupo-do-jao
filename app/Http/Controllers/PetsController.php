<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pet;
use App\Models\Doado;
use App\Models\Adotado;
use Illuminate\Http\Request;

class PetsController extends Controller
{
    public function index(){
        $pets = Pet::all();

        return view('dashboard', [
            'pets' => $pets
        ]);
    }

    public function create(){
        return view('pets.register-pet');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'specie' => 'required',
            'subspecie' => 'required',
            'color' => 'required',
            'size' => 'required|max:2',
            'meters' => 'required|max:3'
        ]);

        $pet = Pet::create($request->all());

        return redirect()->route('dashboard');
    }


    public function show(Pet $pet ){
        return view('pets.show', [
            'pet' => $pet
        ]);
    }

    public function adotar($id){
        $pet = Pet::find($id);
        $user_id = auth()->user()->id;

        $edit = Adotado::create([
            'name_pet' => $pet->name,
            'specie' => $pet->specie,
            'subspecie'=>$pet->subspecie,
            'color' => $pet->color,
            'size' => $pet->size,
            'user_id' => $user_id
        ]);

        $pet->delete();

        return redirect()->route('dashboard');
    }

    public function show_adotado(){
        $user_id = auth()->user()->id;
        $pets = Adotado::where('user_id', 'like', $user_id)->get();

        return view('pets.adotado',['pets' => $pets]);
    }

    public function show_doado(){
        $pets = Pet::all();
        $user_id = auth()->user()->id;

        return view('pets.doado',['pets' => $pets]);
    }

}