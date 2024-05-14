<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::where('user_id', 0)->paginate(8);
        return view('store', ['items' => $items]);
    }

    public function show($id)
    {
        $item = Item::find($id);
        if (!$item) {
            return abort(404);
        }

        return view('store.description', ['item' => $item]);
    }
    public function buy($id)
    {
        $userId = Auth::user()->id;
        $item = Item::find($id);
        $item->user_id = $userId;
        $item->save();

        return redirect()->route('dashboard');
    }
}
