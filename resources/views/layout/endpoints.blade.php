@foreach ($endpoints as $endpoint)
    <div class="card container p-3 mt-3">
        <h6>{{ $endpoint['title'] }}</h6>
        @foreach ($endpoint['endpoints'] as $data)
            <div class="card p-3 mt-2">
                <p>{{ $data['description'] }}</p>
                <div class="endpoint-container d-flex mt-1">
                    <div class="d-flex m-1 mt-0 mb-0 btnsContainer">
                        <button class="btn-request-method btn btn-success">{{ $data['request_method'] }}</button>
                        <button class="btn btn-secondary btnCopyUrl" style="margin-left: 4px" data-url="{{ $data['url'] }}"><i class="bi bi-clipboard"></i></button>
                    </div>
                    <input class="form-control bg-dark text-light txtUrl" type="text" readonly value="{{ $data['url'] }}">
                </div>
            </div>
        @endforeach
    </div>
@endforeach
