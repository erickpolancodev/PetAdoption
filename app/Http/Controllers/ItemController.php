<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all()->sortBy('name');
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
}
