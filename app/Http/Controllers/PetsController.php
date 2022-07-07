<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pet;
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

    public function delete($id){
        Pet::find($id)->delete();
        return redirect()->route('dashboard');
    }
}