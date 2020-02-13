<?php

namespace App\Http\Controllers;

use App\Ad;
use App\Category;
use Illuminate\Http\Request;
use File;

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
            'nuotrauka' => 'mimes:jpeg,jpg,png,gif|required|max:10000'
        ]);

        $path=$request->file('nuotrauka')->store('public/images');
        $filename=str_replace('public/',"", $path);

        $ad = Ad::create([
            'catid' => request('kategorija'),
            'pavadinimas' => request('pavadinimas'), // pavadinimas db laukelis, o key input name
            'aprasymas' => request('aprasymas'),
            'price' => request('kaina'),
            'email' => request('email'),
            'phone' => request('phone'),
            'location' => request('vieta'),
            'nuotrauka' => $filename

        ]);
           return redirect('/ads');
//        $cat = request(['kategorija','pavadinimas','aprasymas','kaina','email','vieta','phone']);
//        dd($cat);
    }
    public function ads()
    {
        $ads = Ad::all();
        $category = Category::all();
        return view('skelbimai.pages.ads', compact('ads'),compact('category'));
    }
    public function adDelete(Ad $ad)
    {
        $ad->delete();
        return redirect('/ads');
    }
    public function adData(Ad $ad)   {

        return view('skelbimai.pages.addata', compact('ad'));
    }
    public function adUpdate(Ad $ad,Request $request){
        $validatedData = $request->validate([
            'pavadinimas' => 'required',
            'aprasymas' => 'required',
            'kaina' => 'required',
            'email' => 'required',
            'vieta' => 'required',
            'nuotrauka' => 'mimes:jpeg,jpg,png,gif|required|max:10000'
        ]);
        $path=$request->file('nuotrauka')->store('public/images');
        $filename=str_replace('public/',"", $path);

        Ad::where ('id', request('id'))->
        update(['pavadinimas' => request('pavadinimas'),
                'aprasymas' => request('aprasymas'),
                'price' => request('kaina'),
                'email' => request('email'),
                'phone' => request('phone'),
                'location' => request('vieta'),
                'nuotrauka' => $filename
        ]);
        //patikrina ar postas turi nuotrauka ir istrina sena.
        if($request->hasFile('nuotrauka'))
        {
            File::delete('../storage/app/public/'.$ad->nuotrauka);
            $path=$request->file('nuotrauka')->store('public/images');
            $filename=str_replace('public/',"", $path);
                Ad::where('id',$ad->id)->update([
                   'nuotrauka' => $filename
                ]);
        }

        return redirect('/ads');
    }
}

