<?php

namespace App\Http\Controllers;

use App\Storephoto;
use App\Topphoto;
use Illuminate\Http\Request;

class StorephotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Storephoto::All();
        return view('tfcphotos.index', compact('photos'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Storephoto  $storephoto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $photo = Storephoto::findOrFail($id);
        return view('tfcphotos.show', compact('photo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Storephoto  $storephoto
     * @return \Illuminate\Http\Response
     */
    public function edit(Storephoto $storephoto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Storephoto  $storephoto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Storephoto $storephoto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Storephoto  $storephoto
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        Storephoto::truncate();
        return redirect()->route('photos_index')->with('success', 'Toutes les photos ont été supprimées !');
    }


    public function select(Request $request)
    {
        $topPhoto = $request->all();
        array_shift($topPhoto);
        foreach ($topPhoto as $id)
        {
            $photo = Storephoto::findOrFail($id);
            Topphoto::create([
                'supporter_id'=> $photo->supporter_id, 
                'game_id' => $photo->game_id, 
                'url' => $photo->url
            ]);   
        }
        return redirect()->route('photos_index')->with('success', 'Photos envoyées dans le Top de l\'appli TFC');
        
    }
}
