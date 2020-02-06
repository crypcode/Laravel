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
    public function skelbimai(){
        return view('skelbimai.pages.skelbimai');
    }
    public function skelbimas(){
        return view('skelbimai.pages.skelbimas');
    }
    public function apie(){
        return view('skelbimai.pages.apie');
    }
    public function kontaktai(){
        return view('skelbimai.pages.kontaktai');
    }
    public function prisijungti(){
        return view('skelbimai.pages.prisijungti');
    }
    public function registracija(){
        return view('skelbimai.pages.registracija');
    }
}
