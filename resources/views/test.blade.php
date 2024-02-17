@extends('layout.layout')

@section('content')
    <div class="test-container container mt-5">
        <h2 class="text-title text-center"><i>Tester</i></h2>
        <div class="mt-3">
            <form id="frmSendRequest">
                <select id="requestMethod" class="form-control bg-success text-light" style="width: 100px">
                    <option>GET</option>
                    <option disabled>(Not available) POST</option>
                    <option disabled>(Not available) PUT</option>
                </select>
                <div class="input-url-container d-flex justify-content-between mt-2">
                    <input id="testUrl" type="text" class="form-control bg-dark text-light" placeholder="Enter URL" required>
                    <div class="d-flex" style="margin-left: 7px">
                        <button id="btnPasteUrl" class="test-page-btn btn btn-light" type="button"><i class="bi bi-clipboard-check"></i> Paste</button>
                        <button id="btnSubmitRequest" class="test-page-btn btn btn-secondary" style="margin-left: 7px" type="submit"><i class="bi bi-send"></i> Submit</button>
                    </div>
                </div>
            </form>
            <textarea id="txtResponse" class="mt-2 card bg-dark text-light" style="width: 100%; height: 60vh; overflow-y: auto;" readonly></textarea>
            <div class="d-flex">
                <button id="btnClearRespose" class="test-page-btn btn btn-secondary mt-2" type="button"><i class="bi bi-x-lg"></i> Clear</button>
                <button id="btnCopyRespose" class="test-page-btn btn btn-secondary m-2 mb-0" type="button"><i class="bi bi-clipboard"></i> Copy</button>
            </div>
            <div class="text-secondary mt-1" style="font-size: 12px">You can also try it using <a href="https://www.postman.com/downloads/" target="_blank">Postman</a>.</div>
        </div>
    </div>
@endsection
