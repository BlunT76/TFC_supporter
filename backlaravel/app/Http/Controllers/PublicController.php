<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home()
    {
        return view('public');
    }

    public function rgpd()
    {
        return view('rgpd');
    }
}
