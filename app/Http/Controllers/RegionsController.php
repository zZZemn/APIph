<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Region;
use Illuminate\Http\Request;

class RegionsController extends Controller
{
    public function index()
    {
        $regions = Region::all();
        return response()->json($regions);
    }
}
