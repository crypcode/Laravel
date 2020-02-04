<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('skelbimai.pages.home');
    }
    public function profile(){
        $darbuotojai = [
            'Jonas',
            'Petras',
            'Antanas',
            'Albinas'
        ];
        return view('test', compact("darbuotojai"));
    }
    public function home(){
        return view('home');
    }
    public function welcome(){
        return view('welcome');
    }
}
