<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarbeariaController extends Controller
{
    public function index()
    {
        return view("index");
    }

    public function contato()
    {
        return view("contato");
    }
}
