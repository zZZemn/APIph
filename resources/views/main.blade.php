@extends('layout.layout')

@section('content')
    <div class="container mt-5">
        <div class="card p-5" style="background-color: rgba(255, 255, 255, 0.014); color: rgba(255, 255, 255, 0.836)">
            <h5 class="text-center">
                <i>
                    Welcome to APIph!
                </i>
                </h4>
                <p class="text-center">
                    Our user-friendly API provides a curated selection of Philippine addresses, making it easy to integrate
                    into
                    your
                    websites, mobile applications, and more. Improve user experiences with our reliable address data,
                    ensuring
                    accuracy and efficiency in your digital projects.
                </p>
        </div>
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
