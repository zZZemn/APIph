<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Region;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        // return view(
        //     'main',
        //     [
        //         'regions' => Region::all()
        //     ]
        // );
        return view('main');
    }
}
