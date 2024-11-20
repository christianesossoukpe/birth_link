<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class   VoeuxController  extends Controller
{
    public function index()
    {
        return Inertia::render('VoeuxComponent');
    }

   
}
