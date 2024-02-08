@extends('layout.layout')

@section('content')
    <div class="container mt-5">
        <h3 class="about-title text-center">
            <i>About APIph</i>
        </h3>
        <div class="abouts-container container card p-4 mt-4">
            @foreach ($abouts as $about)
                <p>{!! $about !!}</p>
            @endforeach
        </div>
    </div>
@endsection
