@extends('layout.layout')

@section('content')
    <div class="test-container container mt-5">
        <div class="">
            <select class="form-control bg-success text-light" style="width: 100px">
                <option>GET</option>
                <option disabled>(Not available) POST</option>
                <option disabled>(Not available) PUT</option>
            </select>
            <div class="d-flex justify-content-between mt-2">
                <input type="text" class="form-control bg-dark text-light" style="margin-right: 7px" id="testUrl" placeholder="Enter URL">
                <button class="btn btn-secondary">Send</button>
            </div>
        </div>
        <textarea class="mt-2 card bg-dark text-light" style="width: 100%; height: 60vh; overflow-y: auto;" id="txtResponse" readonly>
            {
                "asd": "asd",
                "asd": "asd",
                "asd": "asd",
                "asd": "asd",
            },
            {
                "asd": "asd",
                "asd": "asd",
                "asd": "asd",
                "asd": "asd",
            },
            {
                "asd": "asd",
                "asd": "asd",
                "asd": "asd",
                "asd": "asd",
            },
            {
                "asd": "asd",
                "asd": "asd",
                "asd": "asd",
                "asd": "asd",
            },
            {
                "asd": "asd",
                "asd": "asd",
                "asd": "asd",
                "asd": "asd",
            },
            {
                "asd": "asd",
                "asd": "asd",
                "asd": "asd",
                "asd": "asd",
            },
        </textarea>
        <button class="btn btn-secondary mt-2" id="btnClearRespose"><i class="bi bi-x-lg"></i> Clear</button>
        <button class="btn btn-secondary mt-2" id="btnCopyRespose"><i class="bi bi-clipboard"></i> Copy</button>
    </div>
@endsection
