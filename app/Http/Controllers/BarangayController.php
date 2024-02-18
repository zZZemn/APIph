<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Barangay;
use Illuminate\Http\Request;

use function Laravel\Prompts\select;

class BarangayController extends Controller
{
    private function errorMessage($status, $message)
    {
        return response()->json([
            "status" => $status,
            "message" => $message
        ]);
    }

    public function index(Request $request)
    {
        $regionId = $request->input('region_code');
        $provinceId = $request->input('province_code');
        $municipalityId = $request->input('municipality_code');
        $search = $request->input('search');
        if ($search != '') {
            $barangays = Barangay::when($search, function ($query) use ($search) {
                $query->where('refbrgy.brgyDesc', 'like', '%' . $search . '%');
            })
                ->join('refcitymun', 'refbrgy.citymunCode', '=', 'refcitymun.citymunCode')
                ->join('refprovince', 'refbrgy.provCode', '=', 'refprovince.provCode')
                ->join('refregion', 'refbrgy.regCode', '=', 'refregion.regCode')
                ->select('refbrgy.brgyCode', 'refbrgy.brgyDesc', 'refcitymun.citymunDesc', 'refprovince.provDesc', 'refregion.regDesc')
                ->take(100)
                ->get();
        } elseif ($municipalityId != '') {
            $barangays = Barangay::when($municipalityId, function ($query) use ($municipalityId) {
                $query->where('refbrgy.citymunCode', $municipalityId);
            })
                ->join('refcitymun', 'refbrgy.citymunCode', '=', 'refcitymun.citymunCode')
                ->join('refprovince', 'refbrgy.provCode', '=', 'refprovince.provCode')
                ->join('refregion', 'refbrgy.regCode', '=', 'refregion.regCode')
                ->select('refbrgy.brgyCode', 'refbrgy.brgyDesc', 'refcitymun.citymunDesc', 'refprovince.provDesc', 'refregion.regDesc')
                ->get();
        } elseif ($regionId != '') {
            return $this->errorMessage(404, "This endpoint is under maintenance.");
        } elseif ($provinceId != '') {
            return $this->errorMessage(404, "This endpoint is under maintenance.");
        } else {
            return $this->errorMessage(404, 'Something went wrong');
        }

        if ($barangays->isEmpty()) {
            return $this->errorMessage(404, 'No result found.');
        }

        return response()->json($barangays);
    }
}
