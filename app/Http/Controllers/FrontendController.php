<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Contact_us;
use App\Indexs;
use App\Others;

class FrontendController extends Controller
{
    public function beranda()
    {
        $products = Product::where('id', '1')->get();
        $products2 = Product::where('id', '2')->get();
        $products3 = Product::where('id', '3')->get();
        $products4 = Product::where('id', '4')->get();
        $products5 = Product::where('id', '5')->get();
        $products6 = Product::where('id', '6')->get();
        $products7 = Product::where('id', '7')->get();
        $products8 = Product::where('id', '8')->get();
        $products9 = Product::where('id', '9')->get();
        $products10 = Product::where('id', '10')->get();
        $contact = Contact_us::where('id', '1')->get();
        $contact2 = Contact_us::where('id', '2')->get();
        $contact3 = Contact_us::where('id', '3')->get();
        $indexss  = Indexs::where('id', '1')->get();
        $indexss2  = Indexs::where('id', '2')->get();
        $indexss3  = Indexs::where('id', '3')->get();
        $others = Others::all();
        return view('jadi', compact('products','products2','products3','products4','products5','products6','products7','products8','products9','products10','contact','contact2','contact3','indexss','indexss2','indexss3','others'));
    }

    public function product() 
    {
        $products = Product::where('id', '1')->get();
        $products2 = Product::where('id', '2')->get();
        $products3 = Product::where('id', '3')->get();
        $products4 = Product::where('id', '4')->get();
        $products5 = Product::where('id', '5')->get();
        $products6 = Product::where('id', '6')->get();
        $products7 = Product::where('id', '7')->get();
        $products8 = Product::where('id', '8')->get();
        $products9 = Product::where('id', '9')->get();
        $products10 = Product::where('id', '10')->get();
        return view('frontend.product', compact('products','products2','products3','products4','products5','products6','products7','products8','products9','products10'));
    }

    public function contact ()
    {
        $contact = Contact_us::where('id', '1')->get();
        $contact2 = Contact_us::where('id', '2')->get();
        $contact3 = Contact_us::where('id', '3')->get();
        return view ('frontend.contact', compact('contact','contact2','contact3'));
    }
    
    public function indexs ()
    {
        $indexss  = Indexs::where('id', '1')->get();
        $indexss2  = Indexs::where('id', '2')->get();
        $indexss3  = Indexs::where('id', '3')->get();
        return view ('frontend.indexss', compact('indexss','indexss2','indexss3'));
    }
    
    public function others ()
    {
        $others = Others::all();
        return view ('frontend.others', compact('others'));
    }
}
