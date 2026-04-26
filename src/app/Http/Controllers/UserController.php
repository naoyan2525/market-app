<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class UserController extends Controller
{
 public function index()
{

    $items = Item::where('user_id', auth()->id())->get();

    return view('mypage.profile', compact('items'));
}
}