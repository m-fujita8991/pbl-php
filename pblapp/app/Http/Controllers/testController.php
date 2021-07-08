<?php

namespace App\Http\Controllers;

use App\Models\Type;

use Illuminate\Http\Request;

class testController extends Controller
{
    public function index (Request $request)
    {
        $items = Type::all();
        return view ('test', ['items' => $items]);
    }
}