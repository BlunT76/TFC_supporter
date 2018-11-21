<?php

namespace App\Http\Controllers;

use App\Topphoto;
use App\Game;
use Illuminate\Http\Request;

class TopphotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $res = Game::with('topphotos')->whereDate('day','<',date('Y-m-d'))->orderBy('day','desc')->get();
        //dd($res);
        return view('topphotos.index', compact('res'));
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
     * @param  \App\Topphoto  $topphoto
     * @return \Illuminate\Http\Response
     */
    public function show(Topphoto $topphoto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Topphoto  $topphoto
     * @return \Illuminate\Http\Response
     */
    public function edit(Topphoto $topphoto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Topphoto  $topphoto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Topphoto $topphoto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Topphoto  $topphoto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Topphoto::findOrFail($id)->delete();
        return redirect()->route('top_index')->with('success', 'Vous avez bien supprimé la photo.');
    }
}
