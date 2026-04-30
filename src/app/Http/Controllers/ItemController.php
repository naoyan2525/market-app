<?php

namespace App\Http\Controllers;

use App\Models\Item;

class ItemController extends Controller
{
    public function index()
    {
    if (auth()->check()) {
        $items = Item::where('user_id', '!=', auth()->id())->get();
    } else {
        $items = Item::all();
    }

    return view('index', compact('items'));
    }

    public function sell()
    {
        return view('sell');
    }
}