<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocaleController extends Controller
{
    public function SetLocale($locale){
        // dd(app()->getLocale());
        return view('home');
    }
}
