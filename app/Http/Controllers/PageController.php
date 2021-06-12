<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function fhome()
    {
        return view('home');
    }
    public function flm()
    {
        return view('lm');
    }
    public function fls()
    {
        return view('ls');
    }
    public function frx()
    {
        return view('rx');
    }
    public function fcontoh()
    {
        return view('contoh');
    }
}