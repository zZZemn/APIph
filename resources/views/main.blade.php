@extends('layout.layout')

@section('content')
    <div class="container mt-5">
        @include('layout.APIph-description')
        <div class="endpoints-main-container mt-5 mb-5">
            @include('layout.endpoints')
        </div>
    </div>
@endsection
