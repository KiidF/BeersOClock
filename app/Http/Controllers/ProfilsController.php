<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilsController extends Controller
{
    public function index($user)
    {
        dd($user);
        return view('home');
    }
}
