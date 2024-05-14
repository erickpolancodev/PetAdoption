<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pet;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $userId = Auth::user()->id;
        $adoptedPets = Pet::whereUserId($userId)->get();
        $buyedItems = Item::whereUserId($userId)->get();

        if($adoptedPets->count() == 0 && $buyedItems->count() == 0)
        {
            $message = 'Empty';
        }
        else{
            $message = '';
        }

        return view('dashboard', ['message' => $message,'pets' => $adoptedPets, 'items' => $buyedItems ]);
    }

}
