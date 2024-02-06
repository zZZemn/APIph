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
        })->select('REGION_ID', 'PROVINCE_ID', 'PROVINCE')->get();
        return response()->json($provinces);
    }
}
