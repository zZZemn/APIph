<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Region;
use Illuminate\Http\Request;

class RegionsController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        if ($search != '') {
            $regions = Region::when($search, function ($query) use ($search) {
                $query->where('regDesc', 'like', '%' . $search . '%');
            })->get();
        } else {
            $regions = Region::all();
        }

        if ($regions->isEmpty()) {
            $regions = [
                "status" => 404,
                "message" => "No result found!"
            ];
        }

        return response()->json($regions);
    }
}
