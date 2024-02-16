<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Barangay;
use Illuminate\Http\Request;

class BarangayController extends Controller
{
    public function index(Request $request)
    {
        $regionId = $request->input('region_code');
        $provinceId = $request->input('province_code');
        $municipalityId = $request->input('municipality_code');
        $search = $request->input('search');
        if ($search != '') {
            $barangays = Barangay::when($search, function ($query) use ($search) {
                $query->where('brgyDesc', 'like', '%' . $search . '%');
            })->get();
        } elseif ($regionId != '') {
            $barangays = Barangay::when($regionId, function ($query) use ($regionId) {
                $query->where('regCode', $regionId);
            })->get();
        } elseif ($provinceId != '') {
            $barangays = Barangay::when($provinceId, function ($query) use ($provinceId) {
                $query->where('provCode', $provinceId);
            })->get();
        } else {
            $barangays = Barangay::when($municipalityId, function ($query) use ($municipalityId) {
                $query->where('citymunCode', $municipalityId);
            })->get();
        }

        if ($barangays->isEmpty()) {
            $barangays = [
                "status" => 404,
                "message" => "No result found!"
            ];
        }

        return response()->json($barangays);
    }
}
