<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Barangay;
use Illuminate\Http\Request;

class BarangayController extends Controller
{
    public function index(Request $request)
    {
        $municipalityId = $request->input('municipality_id');
        $Barangays = Barangay::when($municipalityId, function ($query) use ($municipalityId) {
            $query->where('MUNICIPALITY_ID', $municipalityId);
        })->select('MUNICIPALITY_ID', 'BARANGAY_ID', 'BARANGAY')->get();

        return response()->json($Barangays);
    }
}
