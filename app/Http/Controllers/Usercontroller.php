<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    public function index()
    {
        return view('user');
    }

    public function show($id)
    {
        return "User ID is: " . $id;
    }

    public function getNameEmail($name, $email)
    {
        return "User Name: " . $name . ", Email: " . $email;
    }
}
