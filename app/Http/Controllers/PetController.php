<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Pet;

class PetController extends Controller
{
    public function index()
    {
        $pets = Pet::where('status', 0)->get();
        return view('principal', ['pets' => $pets]);
    }

    public function show($id)
    {
        $pet = Pet::find($id);

        if (!$pet) {
            return abort(404); // Handle pet not found scenario
        }

        return view('pets.description', ['pet' => $pet]);
    }
}
