<?php

namespace App\Http\Controllers;

use App\Tfcplayer;
use Illuminate\Http\Request;

class TfcplayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = Tfcplayer::orderBy('position', 'asc')->get();
        return view('tfcplayers.index', compact('players'));
    }

    public function indexToApp()
    {
        $res = Tfcplayer::All();
        return response()->json([
            'players' => $res
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tfcplayers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $player = Tfcplayer::create([
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'portrait' => $request->input('portrait'),
            'number' => $request->input('number'),
            'position' => $request->input('position'),
        ]);
        return redirect()->route('players_index')->with('success', 'Vous avez bien ajouté un nouveau joueur.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tfcplayer  $tfcplayer
     * @return \Illuminate\Http\Response
     */
    public function show(Tfcplayer $tfcplayer)
    {
        $res = Tfcplayer::All();
        return response()->json([
            'players' => $res
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tfcplayer  $tfcplayer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $res = Tfcplayer::findOrFail($id);
        return view('tfcplayers.edit' , compact('res'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tfcplayer  $tfcplayer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        Tfcplayer::findOrFail($id)->update([
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'portrait' => $request->input('portrait'),
            'number' => $request->input('number'),
            'position' => $request->input('position'),
        ]);
        return redirect()->route('players_index')->with('success', 'Vous avez bien modifie le joueur.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tfcplayer  $tfcplayer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tfcplayer::findOrFail($id)->delete();
        return redirect()->route('players_index')->with('success', 'Vous avez bien supprimé le joueur.');
    }
}
