<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function index()
    {
        $abouts = [
            'About 1',
            'About 2'
        ];
        return view('about', ['abouts' => $abouts]);
    }
}
