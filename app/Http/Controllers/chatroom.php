<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class chatroom extends Controller
{
    public function index()
    {
        return view('chatroom');
    }
}
