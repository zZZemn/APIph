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
        $Barangays = Barangay::when($municipalityId, function ($query) use ($municipalityId) {
            $query->where('citymunCode', $municipalityId);
        })->get();

        return response()->json($Barangays);
    }
}
