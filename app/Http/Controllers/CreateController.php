<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function create()
    {
        $create = 'create';
        return view('cetegories.create', compact('create'));
    }
}
