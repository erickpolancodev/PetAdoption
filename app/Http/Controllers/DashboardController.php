<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pet;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $userId = Auth::user()->id;
        $adoptedPets = Pet::whereAdoptedby($userId)->get();
        if($adoptedPets->count() == 0)
        {
            return view('dashboard', ['message' => 'No pets adopted', 'pets' => []]);
        }else{
            return view('dashboard', ['message' => '','pets' => $adoptedPets]);
        }
    }

}
