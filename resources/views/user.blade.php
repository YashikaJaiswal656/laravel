<x-layout>
    <div class="container my-4">
        <div class="row g-4">
            @foreach ($tests as $test)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card shadow-sm border-0 rounded-4 h-100">
                        <div class="card-body">
                            <h5 class="card-title text-primary fw-bold">{{ $test->name }}</h5>
                            <p class="card-text mb-1"><strong>Email:</strong> {{ $test->email }}</p>
                            <p class="card-text mb-3"><strong>Number:</strong> {{ $test->number }}</p>
                            
                            <div class="d-flex justify-content-between">
                                <a href="test/edit/{{ $test->id }}" class="btn btn-sm btn-primary">Edit</a>
                                <a href="test/delete/{{ $test->id }}" class="btn btn-sm btn-danger">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
