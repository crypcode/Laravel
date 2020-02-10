<?php

namespace App\Http\Controllers;

use App\Ad;
use App\Category;
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
        $ads = Ad::select('ads.id', 'ads.pavadinimas', 'ads.aprasymas','ads.price','ads.email', 'ads.phone', 'ads.location', 'categories.pavadinimas as category'  )->join('categories', 'categories.id', "=",'ads.catid' )->paginate(8);
        return view ('skelbimai.pages.skelbimai', compact('ads'));
    }
                            //modelis - kintamasis
    public function skelbimas(Ad $ad){
        return view('skelbimai.pages.skelbimas',compact('ad'));
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
