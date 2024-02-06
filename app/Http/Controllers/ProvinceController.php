<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Province;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    public function index(Request $request)
    {
        $regionId = $request->input('region_id');
        $provinces = Province::when($regionId, function ($query) use ($regionId) {
            $query->where('REGION_ID', $regionId);
        })->get();
        return response()->json($provinces);
    }
}
