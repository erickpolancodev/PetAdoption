<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function store($id)
    {
        $userId = Auth::user()->id;
        $itemId = $id;
        
        Order::create([
            'item_id' => $itemId,
            'user_id' => $userId,
        ]);

        return redirect()->route('dashboard');
    }
}
