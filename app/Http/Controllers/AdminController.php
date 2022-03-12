<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth.role:user');
    // }

    public function home()
    {
        return response()->json(['message'=>'admin page only']);
    }
}
