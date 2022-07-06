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
        return view('pets.adicionar');
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

    public static function updateExistingPets()
    {
        $pets = Pet::select('*')->get();

        foreach ($pets as $pet) {
            //updating specie
            if($pet->specie == 'squirtle' || $pet->specie == 'charmander' || $pet->specie == 'bulbasauro'){
                $pet->specie = 'pokemon';
            } else if($pet->specie == 'bunny'){
                $pet->specie = 'coelho';
            } else if($pet->specie == 'dog'){
                $pet->specie = 'cachorro';
            } else if($pet->specie == 'mamba' || $pet->specie == 'mamba-negra'){
                $pet->specie = 'cobra';
            } else if($pet->specie == 'dragao de komodo'){
                $pet->specie = 'dragao de komodo';
            } else if($pet->specie == 'papagaio' || $pet->specie == 'periquito'){
                $pet->specie = 'pássaro';
            } else {
                $pet->specie = $pet->specie;
            }

            //updating size
            if($pet->size == 'large'){
                $pet->size = 'L';
            } else if($pet->size == 'medium'){
                $pet->size = 'M';
            } else if($pet->size == 'small'){
                $pet->size = 'S';
            } else if($pet->size == 'xl'){
                $pet->size = 'XL';
            } else if($pet->size == 'xs'){
                $pet->size = 'XS';
            } else {
                $pet->size = $pet->size;
            }

            $pet->save();
        }
    }


}