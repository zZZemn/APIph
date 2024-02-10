<div class="card container p-3 mt-4">
    <h6>Get Provinces</h6>
    <div class="card p-3 mt-2">
        <p>Retrieve all provinces in the Philippines.</p>
        <div class="endpoint-container d-flex mt-1">
            <button class="btn btn-success">GET</button>
            <input class="form-control bg-dark text-light m-1 mt-0 mb-0" type="text" readonly
                value="http://127.0.0.1:8000/api/provinces">
        </div>
    </div>
    <div class="card p-3 mt-2">
        <p>Retrieve all provinces in the Philippines from specific region.</p>
        <div class="endpoint-container d-flex mt-1">
            <button class="btn btn-success">GET</button>
            <input class="form-control bg-dark text-light m-1 mt-0 mb-0" type="text" readonly
                value="http://127.0.0.1:8000/api/provinces?region_code=">
        </div>
    </div>
    <div class="card p-3 mt-2">
        <p>Search provinces in the Philippines.</p>
        <div class="endpoint-container d-flex mt-1">
            <button class="btn btn-success">GET</button>
            <input class="form-control bg-dark text-light m-1 mt-0 mb-0" type="text" readonly
                value="http://127.0.0.1:8000/api/provinces?search=">
        </div>
    </div>
</div>
