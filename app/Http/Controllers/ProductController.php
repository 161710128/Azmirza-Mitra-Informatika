<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required|max:255',
            'deskripsi' => 'required',
            'gambar' => ''
        ]);

        $products = new Product;
        $products->judul = $request->judul;
        $products->deskripsi = $request->deskripsi;
        $products->gambar = $request->gambar;
        if ($request->hasFile('gambar')){
            $file = $request->file('gambar');
            $destinationPatch = public_path().'/assets/img/gambar/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSucces = $file->move($destinationPatch, $filename);
            $products->gambar = $filename;
        }
        
        $products->save();
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = Product::FindOrFail($id);
        return view('product.show', compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Product::FindOrFail($id);
        return view('product.edit', compact('products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul' => 'required|max:255',
            'deskripsi' => 'required',
            'gambar' => ''
        ]);

        $products = Product::FindOrFail($id);
        $products->judul = $request->judul;
        $products->deskripsi = $request->deskripsi;

        if ($request->hasFile('gambar')){
            $file = $request->file('gambar');
            $destinationPatch = public_path().'/assets/img/gambar/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSucces = $file->move($destinationPatch, $filename);

        if ($products->gambar) { 
        $old_gambar = $products->gambar;
        $filepath = public_path() . DIRECTORY_SEPARATOR . '/assets/img/gambar'
        . DIRECTORY_SEPARATOR . $products->gambar;
            try {
            File::delete($filepath);
            } catch (FileNotFoundException $e) {
        // File sudah dihapus/tidak ada
                }    
            }
        $products->gambar = $filename;
        }
        $products->save();
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = Product::FindOrFail($id);
        if ($products->gambar) {
            $old_foto = $products->gambar;
                $filepath = public_path(). DIRECTORY_SEPARATOR . 'assetss/img/gambar/' . DIRECTORY_SEPARATOR . $products->gambar;
                try{
                    File::delete($filepath);
                } catch (FileNotFoundException $e){
                    // file sudah dihapus
                }
        }
        $products->delete();
        return redirect()->route('product.index');
    }
}
