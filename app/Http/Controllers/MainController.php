<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Region;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $url = "http://127.0.0.1:8000/api/";
        $endPoints = [
            'region' => [
                'title' => 'Get Regions',
                'endpoints' => [
                    [
                        'description' => 'Retrieve all regions in the Philippines.',
                        'request_method' => 'GET',
                        'url' => $url.'regions'
                    ],
                    [
                        'description' => 'Search regions in the Philippines.',
                        'request_method' => 'GET',
                        'url' => $url.'regions?search='
                    ],
                ]
            ],
            'province' => [
                'title' => 'Get Province',
                'endpoints' => [
                    [
                        'description' => 'Retrieve all provinces in the Philippines.',
                        'request_method' => 'GET',
                        'url' => $url.'provinces'
                    ],
                    [
                        'description' => 'Retrieve all provinces in the Philippines from specific region.',
                        'request_method' => 'GET',
                        'url' => $url.'provinces?region_code='
                    ],
                    [
                        'description' => 'Search provinces in the Philippines.',
                        'request_method' => 'GET',
                        'url' => $url.'provinces?search='
                    ],
                ]
            ],
            'municipality' => [
                'title' => 'Get Municipalities',
                'endpoints' => [
                    [
                        'description' => 'Retrieve all municipalities in the Philippines.',
                        'request_method' => 'GET',
                        'url' => $url.'municipalities'
                    ],
                    [
                        'description' => 'Retrieve all municipalities in the Philippines from specific region.',
                        'request_method' => 'GET',
                        'url' => $url.'municipalities?region_code='
                    ],
                    [
                        'description' => 'Retrieve all municipalities in the Philippines from specific province.',
                        'request_method' => 'GET',
                        'url' => $url.'municipalities?province_code='
                    ],
                    [
                        'description' => 'Search municipalities in the Philippines.',
                        'request_method' => 'GET',
                        'url' => $url.'municipalities?search='
                    ],
                ]
            ],
            'barangay' => [
                'title' => 'Get Barangays',
                'endpoints' => [
                    [
                        'description' => 'Retrieve all barangays in the Philippines.',
                        'request_method' => 'GET',
                        'url' => $url.'barangays'
                    ],
                    [
                        'description' => 'Retrieve all municipalities in the Philippines from specific region.',
                        'request_method' => 'GET',
                        'url' => $url.'barangays?region_code='
                    ],
                    [
                        'description' => 'Retrieve all municipalities in the Philippines from specific province.',
                        'request_method' => 'GET',
                        'url' => $url.'barangays?province_code='
                    ],
                    [
                        'description' => 'Retrieve all municipalities in the Philippines from specific municipality.',
                        'request_method' => 'GET',
                        'url' => $url.'barangays?municipality_code='
                    ],
                    [
                        'description' => 'Search barangays in the Philippines.',
                        'request_method' => 'GET',
                        'url' => $url.'barangays?search='
                    ],
                ]
            ]
        ];

        return view(
            'main',
            ['endpoints' => $endPoints]
        );
    }
}
