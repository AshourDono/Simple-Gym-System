<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GymManagerController extends Controller
{
    public function index()
    {
        return view('menu.gym_managers');
    }
}
