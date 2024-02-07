@extends('layout.layout')

@section('content')
    <div class="container mt-5">
        @include('layout.APIph-description')
        <div class="endpoints-main-container mt-5 mb-5">
            @include('layout.endpoints-region')
            @include('layout.endpoints-province')
            @include('layout.endpoints-municipality')
            @include('layout.endpoints-barangay')
        </div>
    </div>
@endsection
