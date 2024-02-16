<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Municipality;
use Illuminate\Http\Request;

use function Laravel\Prompts\search;

class MunicipalityController extends Controller
{
    public function index(Request $request)
    {
        $provinceId = $request->input('province_code');
        $regionId = $request->input('region_code');
        $search = $request->input('search');
        if ($search != '') {
            $municipalities = Municipality::when($search, function ($query) use ($search) {
                $query->where('citymunDesc', $search);
            })->get();
        } elseif ($regionId != '') {
            $municipalities = Municipality::when($regionId, function ($query) use ($regionId) {
                $query->where('regDesc', $regionId);
            })->get();
        } else {
            $municipalities = Municipality::when($provinceId, function ($query) use ($provinceId) {
                $query->where('provCode', $provinceId);
            })->get();
        }

        if ($municipalities->isEmpty()) {
            $municipalities = [
                "status" => 404,
                "message" => "No result found!"
            ];
        }

        return response()->json($municipalities);
    }
}
