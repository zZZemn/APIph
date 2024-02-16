<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Province;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    public function index(Request $request)
    {
        $regionId = $request->input('region_code');
        $search = $request->input('search');

        if ($search != '') {
            $provinces = Province::when($search, function ($query) use ($search) {
                $query->where('provDesc', 'like', '%' . $search . '%');
            })->get();
        } else {
            $provinces = Province::when($regionId, function ($query) use ($regionId) {
                $query->where('regCode', $regionId);
            })->get();
        }

        if ($provinces->isEmpty()) {
            $provinces = [
                "status" => 404,
                "message" => "No result found!"
            ];
        }

        return response()->json($provinces);
    }
}
