
    <x-guest-layout>
        <main>
            <div class="container">
                <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <x-auth-session-status class="mb-4" :status="session('status')" />
                    <p class="fs-6">
                        Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.
                    </p>
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <!-- Email Address -->
                        <div class="col-12">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" id="email" name="email" value="{{ old('email') }}"
                                    placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                                <x-input-error :messages="$errors->get('email')" class="text-danger mt-2" />
                            </div>
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('login') }}" class="btn btn-secondary">Back</a>
                                <button class="btn btn-primary" type="submit">
                                    Email Password Reset Link
                                </button>
                            </div>
                        </div>
                        </form>
                </div>

            </section>

        </div>
    </main><!-- End #main -->
</x-guest-layout>

