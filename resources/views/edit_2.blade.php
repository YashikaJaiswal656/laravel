<x-layout>
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="card shadow-lg border-0 rounded-4 w-100" style="max-width: 600px;">
            <div class="card-body p-4">
                <h3 class="text-center mb-4 text-primary fw-bold">Update Record</h3>

                <form action="/test/update/{{$test->id}}" method="POST">
                    @csrf
                    @method('put')

                    <!-- Name -->
                    <div class="mb-3">
                        <label for="name" class="form-label fw-semibold">Name</label>
                        <input
                            type="text"
                            class="form-control"
                            name="name"
                            id="name"
                            value="{{$test->name}}"
                            placeholder="Enter your name"
                        />
                    </div>

                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label fw-semibold">Email</label>
                        <input
                            type="email"
                            class="form-control"
                            name="email"
                            id="email"
                            value="{{$test->email}}"
                            placeholder="abc@mail.com"
                        />
                    </div>

                    <!-- Number -->
                    <div class="mb-3">
                        <label for="number" class="form-label fw-semibold">Number</label>
                        <input
                            type="number"
                            class="form-control"
                            name="number"
                            id="number"
                            value="{{$test->number}}"
                            placeholder="Enter your number"
                        />
                    </div>

                    <!-- Submit -->
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-lg rounded-3 shadow-sm">
                            Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
