<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pet;
use Illuminate\Http\Request;

class PetsController extends Controller
{
    public function index(){
        $pets = Pet::all('id','name');

        return view('pets.index', [
            'pets' => $pets,
        ]);
    }

    public function create(){
        return view('pets.register-pet');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'specie' => 'required',
            'color' => 'required',
            'size' => 'required|max:2',
        ]);

        $pet = Pet::create([
            'name' => $request['name'],
            'specie' => $request['specie'],
            'color' => $request['color'],
            'size' => $request['size'],
        ]);

        return view('pets.show', [
            'pet' => $pet
        ]);
    }

    public function show(Pet $pet ){
        return view('pets.show', [
            'pet' => $pet
        ]);
    }
}