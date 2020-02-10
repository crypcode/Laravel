<?php

namespace App\Http\Controllers;

use App\Ad;
use App\Category;
use Illuminate\Http\Request;

class SkelbimaiController extends Controller
{
    public function addad()
    {
        $categories = Category::all();
        return view('skelbimai.pages.addSkelbimas', compact('categories'));
    }
    public function storeAd(Request $request)
    {
        $validatedData = $request->validate([
            'kategorija' => 'required',
            'pavadinimas' => 'required',
            'aprasymas' => 'required',
            'kaina' => 'required',
            'email' => 'required',
            'vieta' => 'required',
        ]);
        $ad = Ad::create([
            'catid' => request('kategorija'),
            'pavadinimas' => request('pavadinimas'), // pavadinimas db laukelis, o key input name
            'aprasymas' => request('aprasymas'),
            'price' => request('kaina'),
            'email' => request('email'),
            'phone' => request('phone'),
            'location' => request('vieta'),

        ]);
           return redirect('/ads');
//        $cat = request(['kategorija','pavadinimas','aprasymas','kaina','email','vieta','phone']);
//        dd($cat);
    }
    public function ads()
    {
//        $ads = Ad::all();
//        $category = Category::all();
        $ads = Ad::select('ads.id', 'ads.pavadinimas', 'ads.aprasymas','ads.price','ads.email', 'ads.phone', 'ads.location', 'categories.pavadinimas as category'  )->join('categories', 'categories.id', "=",'ads.catid' );
        return view('skelbimai.pages.ads', compact('ads'));
    }
}

