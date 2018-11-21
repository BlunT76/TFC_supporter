<?php

namespace App\Http\Controllers;

use App\Booleanbestplayer;
use Illuminate\Http\Request;

class BooleanbestplayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    public function booleanbestplayer()
    {
        $res = Booleanbestplayer::find(1);
        return response()->json([
            'booleanbestplayer' => $res
        ]);
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
     * @param  \App\Booleanbestplayer  $booleanbestplayer
     * @return \Illuminate\Http\Response
     */
    public function show(Booleanbestplayer $booleanbestplayer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booleanbestplayer  $booleanbestplayer
     * @return \Illuminate\Http\Response
     */
    public function edit(Booleanbestplayer $booleanbestplayer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Booleanbestplayer  $booleanbestplayer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booleanbestplayer $booleanbestplayer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Booleanbestplayer  $booleanbestplayer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booleanbestplayer $booleanbestplayer)
    {
        //
    }
}
