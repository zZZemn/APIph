<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Barangay;
use Illuminate\Http\Request;

class BarangayController extends Controller
{
    public function index(Request $request)
    {
        $municipalityId = $request->input('municipality_code');
        $search = $request->input('search');
        if ($search != '') {
            $barangays = Barangay::when($search, function ($query) use ($search) {
                $query->where('brgyDesc', 'like', '%' . $search . '%');
            })->get();
        } else {
            $barangays = Barangay::when($municipalityId, function ($query) use ($municipalityId) {
                $query->where('citymunCode', $municipalityId);
            })->get();
        }

        return response()->json($barangays);
    }
}
