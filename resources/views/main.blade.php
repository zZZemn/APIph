@extends('layout.layout')

@section('content')
    <div class="container mt-5">
        <h3 class="text-secondary">Welcome to APIph!</h3>
        <div class="endpoints-main-container mt-5 mb-5">
            <div class="card container p-3">
                <h6>Get Regions</h6>
                <div class="endpoint-container d-flex mt-2">
                    <button class="btn btn-success">GET</button>
                    <input class="form-control" type="text" readonly value="http://127.0.0.1:8000/api/regions">
                </div>
            </div>
            <div class="card container p-3 mt-4">
                <h6>Get Provinces</h6>
                <div class="endpoint-container d-flex mt-2">
                    <button class="btn btn-success">GET</button>
                    <input class="form-control" type="text" readonly value="http://127.0.0.1:8000/api/provinces">
                </div>
                <div class="endpoint-container d-flex mt-2">
                    <button class="btn btn-success">GET</button>
                    <input class="form-control" type="text" readonly
                        value="http://127.0.0.1:8000/api/provinces?region_id=">
                </div>
            </div>
            <div class="card container p-3 mt-4">
                <h6>Get Municipalities</h6>
                <div class="endpoint-container d-flex mt-2">
                    <button class="btn btn-success">GET</button>
                    <input class="form-control" type="text" readonly value="http://127.0.0.1:8000/api/municipalities">
                </div>
                <div class="endpoint-container d-flex mt-2">
                    <button class="btn btn-success">GET</button>
                    <input class="form-control" type="text" readonly
                        value="http://127.0.0.1:8000/api/municipalities?province_id=">
                </div>
            </div>
            <div class="card container p-3 mt-4">
                <h6>Get Barangays</h6>
                <div class="endpoint-container d-flex mt-2">
                    <button class="btn btn-success">GET</button>
                    <input class="form-control" type="text" readonly value="http://127.0.0.1:8000/api/barangays">
                </div>
                <div class="endpoint-container d-flex mt-2">
                    <button class="btn btn-success">GET</button>
                    <input class="form-control" type="text" readonly
                        value="http://127.0.0.1:8000/api/barangays?municipality_id=">
                </div>
            </div>
        </div>
    </div>
@endsection
