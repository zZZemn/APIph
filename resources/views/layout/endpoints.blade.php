@foreach ($endpoints as $endpoint)
    <div class="card container p-3 mt-3">
        <h6>{{ $endpoint['title'] }}</h6>
        @foreach ($endpoint['endpoints'] as $data)
            <div class="card p-3 mt-2">
                <p>{{ $data['description'] }}</p>
                <div class="endpoint-container d-flex mt-1">
                    <button class="btn btn-success">{{ $data['request_method'] }}</button>
                    <input class="form-control bg-dark text-light m-1 mt-0 mb-0" type="text" readonly
                        value="{{ $data['url'] }}">
                </div>
            </div>
        @endforeach
    </div>
@endforeach
