@extends('layout.layout')

@section('content')
    <div class="test-container container mt-5">
        <form id="frmSendRequest">
            <select id="requestMethod" class="form-control bg-success text-light" style="width: 100px">
                <option>GET</option>
                <option disabled>(Not available) POST</option>
                <option disabled>(Not available) PUT</option>
            </select>
            <div class="d-flex justify-content-between mt-2">
                <input id="testUrl" type="text" class="form-control bg-dark text-light" style="margin-right: 7px" placeholder="Enter URL">
                <button id="btnSubmitRequest" class="btn btn-secondary">Send</button>
            </div>
        </form>
        <textarea id="txtResponse" class="mt-2 card bg-dark text-light" style="width: 100%; height: 60vh; overflow-y: auto;" readonly></textarea>
        <button id="btnClearRespose" class="btn btn-secondary mt-2"><i class="bi bi-x-lg"></i> Clear</button>
        <button id="btnCopyRespose" class="btn btn-secondary mt-2"><i class="bi bi-clipboard"></i> Copy</button>
    </div>
@endsection
