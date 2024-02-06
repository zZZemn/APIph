@extends('layout.layout')

@section('content')
    <h3>About</h3>
    @foreach ($abouts as $about)
        <p>{{ $about }}</p>
    @endforeach
@endsection
