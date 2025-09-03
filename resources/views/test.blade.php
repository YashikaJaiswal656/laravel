<x-layout>
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="card shadow-lg border-0 rounded-4 w-100" style="max-width: 600px;">
            <div class="card-body p-4">
                <h3 class="text-center mb-4 text-primary fw-bold">Registration Form</h3>

                <form action="test/store" method="POST">
                    @csrf
                    <!-- Name -->
                    <div class="mb-3">
                        <label for="name" class="form-label fw-semibold">Name</label>
                        <input
                            type="text"
                            class="form-control @error('name') is-invalid @enderror"
                            name="name"
                            id="name"
                            placeholder="Enter your name"
                        />
                        <div class="text-danger small">
                            @error('name') {{ $message }} @enderror
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label fw-semibold">Email</label>
                        <input
                            type="email"
                            class="form-control @error('email') is-invalid @enderror"
                            name="email"
                            id="email"
                            placeholder="abc@mail.com"
                        />
                        <div class="text-danger small">
                            @error('email') {{ $message }} @enderror
                        </div>
                    </div>

                    <!-- Number -->
                    <div class="mb-3">
                        <label for="number" class="form-label fw-semibold">Number</label>
                        <input
                            type="number"
                            class="form-control @error('number') is-invalid @enderror"
                            name="number"
                            id="number"
                            placeholder="Enter your number"
                        />
                        <div class="text-danger small">
                            @error('number') {{ $message }} @enderror
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-lg rounded-3 shadow-sm">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
