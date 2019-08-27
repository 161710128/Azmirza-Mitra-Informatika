<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Indexs;
use File;

class IndexsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $indexss = Indexs::all();
        return view('indexs.index', compact('indexss'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('indexs.create');
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
            'deskripsi' => 'required'
        ]);

        $indexss = new Indexs;
        $indexss->judul = $request->judul;
        $indexss->deskripsi = $request->deskripsi;        
        $indexss->save();
        return redirect()->route('indexs.index');
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
        $indexss = Indexs::FindOrFail($id);
        return view('indexs.edit', compact('indexss'));
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
            'deskripsi' => 'required'
        ]);

        $indexss = Indexs::FindOrFail($id);
        $indexss->judul = $request->judul;
        $indexss->deskripsi = $request->deskripsi;
        $indexss->save();
        return redirect()->route('indexs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $indexss = Indexs::FindOrFail($id);
        $indexss->delete();
        return redirect()->route('indexs.index');
    }
}
