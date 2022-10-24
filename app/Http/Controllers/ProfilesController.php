<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;


class ProfilesController extends Controller
{
    public function index($user)
    {
        return view('home');
    }
}
