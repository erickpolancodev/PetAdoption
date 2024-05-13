<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Pet;
use Illuminate\Support\Facades\Auth;

class PetController extends Controller
{
    public function index()
    {
        $pets = Pet::where('status', 0)->paginate(8);
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

    public function adopt($id)
    {
        $userId = Auth::user()->id;
        $pet = Pet::find($id);
        $pet->status = 1;
        $pet->user_id = $userId;
        $pet->save();

        return redirect()->route('dashboard');
    }
}
