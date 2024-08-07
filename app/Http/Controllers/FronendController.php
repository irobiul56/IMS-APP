<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use Illuminate\Http\Request;

class FronendController extends Controller
{
    public function index() {

        return Inertia::render('Frontend/Home');
    }

    public function about(){
        return Inertia::render('Frontend/About');
    }

    public function pos(){
        return Inertia::render('Frontend/Pos');
    }
}
