<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Municipality;
use Illuminate\Http\Request;

class MunicipalityController extends Controller
{
    public function index(Request $request)
    {
        $provinceId = $request->input('province_id');
        $municipalities = Municipality::when($provinceId, function ($query) use ($provinceId) {
            $query->where('PROVINCE_ID', $provinceId);
        })->select('PROVINCE_ID', 'MUNICIPALITY_ID', 'MUNICIPALITY')->get();

        return response()->json($municipalities);
    }
}
