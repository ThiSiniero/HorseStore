<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class testecontrollers extends Controller
{
    public function natal() {
        return view('teste');
    }

    public function store() {
        return view('notas');
    }
}
