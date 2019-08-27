<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Others;
use File;

class OthersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $otherss = Others::all();
        return view('others.index', compact('otherss'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('others.create');
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

        $otherss = new Others;
        $otherss->judul = $request->judul;
        $otherss->deskripsi = $request->deskripsi;
        $otherss->gambar = $request->gambar;
        if ($request->hasFile('gambar')){
            $file = $request->file('gambar');
            $destinationPatch = public_path().'/assets/img/gambar/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSucces = $file->move($destinationPatch, $filename);
            $otherss->gambar = $filename;
        }
        
        $otherss->save();
        return redirect()->route('others.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $otherss = Others::FindOrFail($id);
        return view('others.edit', compact('otherss'));
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

        $otherss = Others::FindOrFail($id);
        $otherss->judul = $request->judul;
        $otherss->deskripsi = $request->deskripsi;

        if ($request->hasFile('gambar')){
            $file = $request->file('gambar');
            $destinationPatch = public_path().'/assets/img/gambar/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSucces = $file->move($destinationPatch, $filename);

        if ($otherss->gambar) { 
        $old_gambar = $otherss->gambar;
        $filepath = public_path() . DIRECTORY_SEPARATOR . '/assets/img/gambar'
        . DIRECTORY_SEPARATOR . $otherss->gambar;
            try {
            File::delete($filepath);
            } catch (FileNotFoundException $e) {
        // File sudah dihapus/tidak ada
                }    
            }
        $otherss->gambar = $filename;
        }
        $otherss->save();
        return redirect()->route('others.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $otherss = Others::FindOrFail($id);
        if ($otherss->gambar) {
            $old_foto = $otherss->gambar;
                $filepath = public_path(). DIRECTORY_SEPARATOR . 'assetss/img/gambar/' . DIRECTORY_SEPARATOR . $otherss->gambar;
                try{
                    File::delete($filepath);
                } catch (FileNotFoundException $e){
                    // file sudah dihapus
                }
        }
        $otherss->delete();
        return redirect()->route('others.index');
    }
}
